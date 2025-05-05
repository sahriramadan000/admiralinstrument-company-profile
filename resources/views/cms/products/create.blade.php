@extends('cms.layouts.app')

@push('style_link')
@endpush

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <form action="{{ route('cms.product.store') }}" class="row needs-validation" method="post" enctype="multipart/form-data" novalidate>
            @csrf

            {{-- Header --}}
            <div class="col-12">
                <div class="card mb-2 br-15">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex gap-3 align-items-center">
                            <a href="{{ route('cms.product.index') }}" class="btn shadow-lg fs-20 text-dark rounded-3" style="width: 45px; height: 45px; border: 1px solid #eeeeee;">
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

            <div class="row">
                {{-- Sidebar Gambar & File --}}
                <div class="col-12 col-lg-4 mt-2">
                    <div class="card border-top-0 br-15">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Upload File</h5>
                            <p class="text-muted">Upload gambar produk.</p>

                            {{-- Gambar --}}
                            @for ($i = 1; $i <= 4; $i++)
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Gambar {{ $i }}</label>
                                <input class="filepond @error('image'.$i) is-invalid @enderror"
                                    type="file"
                                    name="image{{ $i }}"
                                    accept="image/*" />
                                @error('image'.$i)
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="row">
                        {{-- Konten Utama --}}
                        <div class="col-12 mt-2">
                            <div class="card border-top-0 br-15">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">Informasi Umum</h5>
                                    <p class="text-muted">Isi data produk secara lengkap dan akurat.</p>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Nama Produk</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukkan nama produk Anda" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Deskripsi Produk</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                            rows="4" placeholder="Tulis deskripsi produk...">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Kategori Produk</label>
                                        <select name="product_category_id" class="form-select @error('product_category_id') is-invalid @enderror" required>
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('product_category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('product_category_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold" for="is_available">Ketersediaan Produk</label>
                                                <select name="is_available" id="is_available" class="form-select @error('is_available') is-invalid @enderror" required>
                                                    <option value="1" {{ old('is_available', '1') == '1' ? 'selected' : '' }}>Tersedia</option>
                                                    <option value="0" {{ old('is_available') == '0' ? 'selected' : '' }}>Kosong</option>
                                                </select>
                                                @error('is_available')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold" for="is_active">Status Produk</label>
                                                <select name="is_active" id="is_active" class="form-select @error('is_active') is-invalid @enderror" required>
                                                    <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Aktif</option>
                                                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Nonaktif</option>
                                                </select>
                                                @error('is_active')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Sidebar Gambar & File --}}
                        <div class="col-12">
                            <div class="card border-top-0 br-15">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">Upload File</h5>
                                    <p class="text-muted">Upload dokumen produk.</p>

                                    {{-- PDF --}}
                                    <div class="row">
                                        @for ($i = 1; $i <= 3; $i++)
                                            <div class="col-12 col-md-4">
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">PDF {{ $i }}</label>
                                                    <input class="filepond pdf @error('pdf'.$i) is-invalid @enderror"
                                                        type="file"
                                                        name="pdf{{ $i }}"
                                                        accept="application/pdf" />
                                                    @error('pdf'.$i)
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection



@push('scripts')
<script>
    $(document).ready(function () {
        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);

        // Apply to all filepond elements
        document.querySelectorAll('.filepond').forEach(input => {
            FilePond.create(input, {
                allowMultiple: false,
                maxFiles: 1,
                storeAsFile: true,
                imagePreviewHeight: 150,
                acceptedFileTypes: input.accept.includes('image')
                    ? ['image/*']
                    : ['application/pdf'],
                allowImagePreview: input.accept.includes('image'),
            });
        });
    });
</script>
@endpush
