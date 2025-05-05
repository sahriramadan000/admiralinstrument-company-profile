<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
     /**
     * Instantiate a new ProductCategoryController instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:product-category-view', ['only' => ['index']]);
        $this->middleware('permission:product-category-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-category-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('cms.product-category.index', [
            'page_title' => 'Daftar Kategori Produk',
            'sub_title' => 'Lihat, kelola, dan atur kategori produk Anda secara efisien.'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('cms.product-category.create', [
            'page_title' => 'Daftar Kategori Produk',
            'sub_title' => 'Tambah Kategori Produk Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $dt = new ProductCategory();
            $dt->name = $request->name;
            $dt->slug = Str::slug($request->name);

            $dt->save();
            DB::commit();

            return redirect()->route('cms.product-category.index')
                    ->withSuccess('Kategori produk baru berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal menambahkan kategori produk. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $product_category): View
    {
        return view('cms.product-category.edit', [
            'page_title' => 'Daftar Kategori Produk',
            'sub_title' => 'Edit Kategori Produk',
            'product_category' => $product_category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $product_category): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $product_category->name = $request->name;
            $product_category->slug = Str::slug($request->name);

            $product_category->save();
            DB::commit();

            return redirect()->route('cms.product-category.index')
                    ->withSuccess('Kategori produk berhasil diperbarui.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                    ->withErrors('Gagal mengedit kategori produk. Kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $product_category)
    {
        DB::beginTransaction();

        try {
            // Hapus data dari database
            $product_category->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kategori produk telah berhasil dihapus.'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mencoba menghapus kategori produk. Silakan coba lagi nanti.'
            ], 500);
        }
    }


    // ====================================================================================================================
    // API
    // ====================================================================================================================

    public function getDataProductCategory(): JsonResponse
    {
        try {
            // Get data product
            $products = ProductCategory::orderBy('id', 'DESC')->get();
            // 200 Success
            return response()->json([
                'success' => true,
                'message' => 'Data kategori produk berhasil diambil',
                'data' => $products
            ], 200);
        } catch (\Exception $e) {
            // 500 Error
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data kategori produk',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
