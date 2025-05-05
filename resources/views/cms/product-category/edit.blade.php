@extends('cms.layouts.app')

@section('style')

@endsection

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <form action="{{ route('cms.product-category.update', $product_category->id) }}" method="post" enctype="multipart/form-data" class="row">
            @csrf
            @method("PUT")
            <div class="col-12">
                <div class="card mb-2 br-15">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex justify-content-start align-items-center gap-3">
                            <div class="">
                                <a href="{{ route('cms.product-category.index') }}" class="btn shadow-lg fs-20 d-flex align-items-center justify-content-center text-dark rounded-3" style="width: 45px !important; height:45px !important; border: 1px solid #eeeeee;">
                                    <iconify-icon icon="solar:arrow-left-broken"></iconify-icon>
                                </a>
                            </div>
                            <div class="">
                                <p class="text-muted mb-0">Kembali ke Daftar</p>
                                <h3 class="mb-0 fw-bold text-capitalize">{{ $sub_title }}</h3>
                            </div>
                        </div>
                        <div class="text-zero top-right-button-container">
                            <button type="submit" class="btn btn-md btn-light-brand btn-success">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <div class="card border-top-0 br-15">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Kategori</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama kategori Anda" value="{{ old('name', $product_category->name ?? '-') }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
@endpush
