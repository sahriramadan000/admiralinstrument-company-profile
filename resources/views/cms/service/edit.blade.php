@extends('cms.layouts.app')

@push('style_link')
@endpush

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <form action="{{ route('cms.service.update', $service->id) }}" class="row needs-validation" method="post" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')

            {{-- Header --}}
            <div class="col-12">
                <div class="card mb-2 br-15">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex gap-3 align-items-center">
                            <a href="{{ route('cms.service.index') }}" class="btn shadow-lg fs-20 text-dark rounded-3" style="width: 45px; height: 45px; border: 1px solid #eeeeee;">
                                <iconify-icon icon="solar:arrow-left-broken"></iconify-icon>
                            </a>
                            <div>
                                <p class="text-muted mb-0">Kembali ke Daftar</p>
                                <h3 class="mb-0 fw-bold text-capitalize">{{ $sub_title }}</h3>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-light-brand btn-success">Update</button>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Sidebar Gambar & File --}}
                <div class="col-12 col-lg-4 mt-2">
                    <div class="card border-top-0 br-15">
                        <div class="card-body">
                            <h5 class="card-title mb-1">Upload File</h5>
                            <p class="text-muted">Upload gambar layanan.</p>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Gambar</label>
                                <input class="filepond image-input @error('image') is-invalid @enderror"
                                    type="file"
                                    name="image"
                                    accept="image/*"
                                    data-image="{{ $service->image ? asset('assets/img/service/' . $service->image) : '' }}">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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
                                    <p class="text-muted">Perbarui data layanan secara lengkap dan akurat.</p>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Nama Layanan</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukkan nama layanan Anda" value="{{ old('name', $service->name) }}" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Deskripsi Layanan</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                            rows="4" placeholder="Tulis deskripsi layanan...">{{ old('description', $service->description) }}</textarea>
                                        @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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

        const fileInput = document.querySelector('.filepond');
        const pond = FilePond.create(fileInput, {
            allowMultiple: false,
            maxFiles: 1,
            acceptedFileTypes: ['image/*'],
            imagePreviewHeight: 150,
            allowImagePreview: true,
            storeAsFile: true,
        });

        // Check if there is an avatar already saved
        const imageUrl = fileInput.dataset.image;
        if (imageUrl) {
            pond.addFile(imageUrl);
        }
    });
</script>
@endpush
