<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
     /**
     * Instantiate a new ServiceController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:service-view', ['only' => ['index']]);
        $this->middleware('permission:service-create', ['only' => ['create','store']]);
        $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('cms.service.index', [
            'page_title' => 'Daftar Layanan',
            'sub_title' => 'Lihat, kelola, dan atur layanan Anda secara efisien.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('cms.service.create', [
            'page_title' => 'Daftar Layanan',
            'sub_title' => 'Tambah Layanan Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $service = new Service();
            $service->name = $request->name;
            $service->description = $request->description;
            if ($request->hasFile("image")) {
                $image = $request->file("image");
                $name = time() . "_img_service." . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/service/');
                $image->move($destinationPath, $name);
                $service->image = $name;
            }

            $service->save();
            DB::commit();

            return redirect()->route('cms.service.index')
                    ->withSuccess('Layanan baru berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal menambahkan layanan. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View
    {
        return view('cms.service.edit', [
            'page_title' => 'Daftar Layanan',
            'sub_title' => 'Edit Layanan',
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $service->name = $request->name;
            $service->description = $request->description;

            if ($request->hasFile('image')) {
                // Hapus file lama jika ada
                if ($service->image) {
                    $oldPath = public_path("assets/img/service/" . $service->image);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }

                $file = $request->file('image');
                $name = uniqid("img_service_") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/img/service/'), $name);
                $service->image = $name;
            }

            $service->save();
            DB::commit();

            return redirect()->route('cms.service.index')
                    ->withSuccess('Layanan berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal mengedit layanan. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        DB::beginTransaction();

        try {
            $imageName = $service->image;
            if ($imageName) {
                $imagePath = public_path("assets/img/service/{$imageName}");
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Hapus data dari database
            $service->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Layanan telah berhasil dihapus.'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mencoba menghapus layanan. Silakan coba lagi nanti.'
            ], 500);
        }
    }


    // ====================================================================================================================
    // API
    // ====================================================================================================================

    public function getData(): JsonResponse
    {
        try {
            // Get data service
            $services = Service::orderBy('id', 'DESC')->get();
            // 200 Success
            return response()->json([
                'success' => true,
                'message' => 'Data layanan berhasil diambil',
                'data' => $services
            ], 200);
        } catch (\Exception $e) {
            // 500 Error
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data layanan',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
