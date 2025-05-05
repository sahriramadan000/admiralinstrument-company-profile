@extends('cms.layouts.app')

@push('style_link')
@endpush

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <form action="{{ route('cms.product-category.store') }}" class="row needs-validation" method="post" enctype="multipart/form-data" novalidate>
            @csrf

            {{-- Header --}}
            <div class="col-12">
                <div class="card mb-2 br-15">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex gap-3 align-items-center">
                            <a href="{{ route('cms.product-category.index') }}" class="btn shadow-lg fs-20 text-dark rounded-3" style="width: 45px; height: 45px; border: 1px solid #eeeeee;">
                                <iconify-icon icon="solar:arrow-left-broken"></iconify-icon>
                            </a>
                            <div>
                                <p class="text-muted mb-0">Kembali ke Daftar</p>
                                <h3 class="mb-0 fw-bold text-capitalize">{{ $sub_title }}</h3>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-light-brand btn-success">Simpan</button>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <div class="card border-top-0 br-15">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Kategori</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama kategori Anda" value="{{ old('name') }}" required>
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
