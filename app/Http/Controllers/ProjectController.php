<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Instantiate a new ProjectController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:project-view', ['only' => ['index']]);
        $this->middleware('permission:project-create', ['only' => ['create','store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('cms.project.index', [
            'page_title' => 'Daftar Proyek',
            'sub_title' => 'Lihat, kelola, dan atur proyek Anda secara efisien.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('cms.project.create', [
            'page_title' => 'Daftar Proyek',
            'sub_title' => 'Tambah Proyek Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $project = new Project();
            $project->name = $request->name;
            $project->category = $request->category;
            if ($request->hasFile("image")) {
                $image = $request->file("image");
                $name = time() . "_img_project." . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/img/project/');
                $image->move($destinationPath, $name);
                $project->image = $name;
            }

            $project->save();
            DB::commit();

            return redirect()->route('cms.project.index')
                    ->withSuccess('Proyek baru berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal menambahkan proyek. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): View
    {
        return view('cms.project.edit', [
            'page_title' => 'Daftar Proyek',
            'sub_title' => 'Edit Proyek',
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $project->name = $request->name;
            $project->category = $request->category;

            if ($request->hasFile('image')) {
                // Hapus file lama jika ada
                if ($project->image) {
                    $oldPath = public_path("assets/img/project/" . $project->image);
                    if (File::exists($oldPath)) {
                        File::delete($oldPath);
                    }
                }

                $file = $request->file('image');
                $name = uniqid("img_project_") . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/img/project/'), $name);
                $project->image = $name;
            }

            $project->save();
            DB::commit();

            return redirect()->route('cms.project.index')
                    ->withSuccess('Proyek berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal mengedit proyek. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        DB::beginTransaction();

        try {
            $imageName = $project->image;
            if ($imageName) {
                $imagePath = public_path("assets/img/project/{$imageName}");
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // Hapus data dari database
            $project->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Proyek telah berhasil dihapus.'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mencoba menghapus proyek. Silakan coba lagi nanti.'
            ], 500);
        }
    }


    // ====================================================================================================================
    // API
    // ====================================================================================================================

    public function getData(): JsonResponse
    {
        try {
            // Get data project
            $project = Project::orderBy('id', 'DESC')->get();
            // 200 Success
            return response()->json([
                'success' => true,
                'message' => 'Data proyek berhasil diambil',
                'data' => $project
            ], 200);
        } catch (\Exception $e) {
            // 500 Error
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data proyek',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
