@extends('cms.layouts.app')

@push('styles')

@endpush

@section('content')
<div class="row">
    <div class="col">
        <div class="card br-15">
            <div class="card-header">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div class="">
                        <h3 class="m-0 fw-bold text-capitalize">{{ $page_title }}</h3>
                        <p class="text-muted mb-0 mt-1">{{ $sub_title }}</p>
                    </div>

                    <a href="{{ route('cms.product-category.create') }}" class="btn btn-primary d-flex justify-content-center align-items-center gap-1">
                        <i class="bx bx-plus me-1"></i>
                        <span>Tambah Kategori</span>
                    </a>
                </div> <!-- end row -->
            </div>
            <div class="card-body px-0">
                <div id="table-loading-state"></div>
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@push('scripts')
<script>
    const editRoute = "{{ route('cms.product-category.edit', ':id') }}";
    const deleteRoute = "{{ route('cms.product-category.destroy', ':id') }}";
</script>
<script src="{{ asset('js/product-category.js') }}"></script>
@endpush
