<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Agent;
use App\Models\Branch;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user-management-view', ['only' => ['index']]);
        $this->middleware('permission:user-management-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-management-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-management-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('cms.users.index', [
            'page_title' => 'Manajemen Pengguna',
            'sub_title' => 'Mengontrol dan mengelola akses pengguna ke sistem secara efisien.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::pluck('name')->toArray();

        return view('cms.users.create', [
            'page_title' => 'Manajemen Pengguna',
            'sub_title' => 'Tambah Pengguna Baru',
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $dataUser = $request->all();

        DB::beginTransaction();
        try {
            $user = new User();
            $user->name          = $dataUser['name'];
            $user->nip           = $dataUser['nip'];
            $user->username      = $dataUser['username'];
            $user->email         = $dataUser['email'];
            $user->password      = Hash::make($request->password);

            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/profile_picture/');
                $image->move($destinationPath, $name);
                $user->avatar = $name;
            }

            $user->assignRole($request->roles);
            $user->save();
            DB::commit();

            return redirect()->route('cms.users.index')
                    ->withSuccess('Pengguna baru berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal menambahkan user. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        $data['page_title'] = 'Manajemen Pengguna';
        $data['sub_title'] = 'Profil Pengguna';
        $data['user'] = $user;
        return view('cms.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        $roles = Role::pluck('name')->toArray();

        return view('cms.users.edit', [
            'page_title' => 'Manajemen Pengguna',
            'sub_title' => 'Edit Pengguna',
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $user->roles->pluck('name')->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $input = $request->all();

        DB::beginTransaction();
        try {
            if(!empty($request->password)){
                $input['password'] = Hash::make($request->password);
            }else{
                $input = $request->except('password');
            }

            if ($request->hasFile('avatar')) {
                // Hapus gambar lama jika ada
                if ($user->avatar) {
                    $oldImagePath = public_path('assets/img/profile_picture/' . $user->avatar);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Simpan Gambar Baru
                $image = $request->file('avatar');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/profile_picture/');
                $image->move($destinationPath, $name);
                $input['avatar'] = $name;
            }

            $user->update($input);

            if ($user->roles->pluck('name')->first() !== 'Super Admin') {
                $user->syncRoles($request->roles);
            }
            DB::commit();

            return redirect(route('cms.users.index', $user))
                    ->withSuccess('Pengguna berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal mengedit pengguna. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            // About if user is Super Admin or User ID belongs to Auth User
            if ($user->hasRole('Super Admin') && $user->id == auth()->user()->id) {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Anda tidak memiliki izin yang diperlukan untuk menghapus pengguna ini.'
                ], 403);
            }

            // Cek apakah user memiliki gambar
            if ($user->avatar) {
                $imagePath = public_path('assets/img/profile_picture/' . $user->avatar);

                // Hapus file jika ada
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Sync roles and delete the user
            $user->syncRoles([]);
            $user->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Pengguna telah berhasil dihapus.'
            ]);

        } catch (\Exception $e) {
            // Rollback transaction if any error occurs
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mencoba menghapus pengguna. Silakan coba lagi nanti.'
            ], 500);
        }
    }

    // USER PROFILE CONTROLLER
    public function userProfile(): View
    {
        if (!Auth::check()) {
            return route('cms.login');
        }

        $user = User::where('id', Auth::user()->id)->first();
        return view('cms.users.user-profile', [
            'page_title' => 'Profil Pengguna',
            'sub_title' => 'Edit Profil Pengguna',
            'user' => $user,
            'userRoles' => $user->roles->pluck('name')->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUserProfile(UpdateUserProfileRequest $request): RedirectResponse
    {
        if (!Auth::check()) {
            return route('cms.login');
        }

        $input = $request->all();

        DB::beginTransaction();
        try {
            $user = User::findOrFail(Auth::user()->id);

            if(!empty($request->password)){
                $input['password'] = Hash::make($request->password);
            }else{
                $input = $request->except('password');
            }

            if ($request->hasFile('avatar')) {
                // Hapus gambar lama jika ada
                if ($user->avatar) {
                    $oldImagePath = public_path('assets/img/profile_picture/' . $user->avatar);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Simpan Gambar Baru
                $image = $request->file('avatar');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/profile_picture/');
                $image->move($destinationPath, $name);
                $input['avatar'] = $name;
            }

            $user->update($input);
            DB::commit();

            return redirect(route('cms.settings'))
                    ->withSuccess('Profil pengguna berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal mengedit profil pengguna. Kesalahan: ' . $e->getMessage());
        }
    }

    // ====================================================================================================================
    // API
    // ====================================================================================================================

    public function getDataUser(): JsonResponse
    {
        try {
            // Get data user
            $users = User::select('id', 'nip', 'name', 'username', 'avatar', 'email')->get();
            // 200 Success
            return response()->json([
                'success' => true,
                'message' => 'Data pengguna berhasil diambil',
                'data' => $users
            ], 200);
        } catch (\Exception $e) {
            // 500 Error
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data pengguna',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
