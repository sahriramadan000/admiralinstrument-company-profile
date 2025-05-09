@extends('cms.layouts.app')

@section('content')
<div class="alert alert-primary d-flex align-items-center justify-content-between mb-4 p-4 br-15" role="alert">
    <div class="d-flex align-items-center gap-3">
        <div class="avatar-md bg-primary bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center">
            <iconify-icon icon="solar:rocket-2-bold-duotone" class="fs-32 text-primary"></iconify-icon>
        </div>
        <div>
            <h4 class="mb-1 text-primary fw-bold text-uppercase">Content Management System</h4>
            <p class="mb-0 text-muted">Kelola konten dan informasi dengan mudah, cepat, dan terpusat dalam satu sistem.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xl-3">
         <div class="card">
              <div class="card-body">
                   <div class="row">
                        <div class="col-6">
                             <div class="avatar-md bg-light bg-opacity-50 rounded">
                                  <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                             </div>
                        </div>
                        <div class="col-6 text-end">
                             <p class="text-muted mb-0 text-truncate">Kategori Produk</p>
                             <h3 class="text-dark mt-1 mb-0">{{ number_format($category_count) }}</h3>
                        </div>
                   </div>
              </div>
              <div class="card-footer border-0 py-2 bg-light bg-opacity-50">
                   <div class="d-flex align-items-center justify-content-between">
                        <div>
                             <span class="text-muted ms-1 fs-12">All</span>
                        </div>
                        <a href="{{ route('cms.product-category.index') }}" class="text-reset fw-semibold fs-12">View More</a>
                   </div>
              </div>
         </div>
    </div>

    <div class="col-md-6 col-xl-3">
         <div class="card">
              <div class="card-body">
                   <div class="row">
                        <div class="col-6">
                             <div class="avatar-md bg-light bg-opacity-50 rounded">
                                  <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-success avatar-title"></iconify-icon>
                             </div>
                        </div>
                        <div class="col-6 text-end">
                             <p class="text-muted mb-0 text-truncate">Product</p>
                             <h3 class="text-dark mt-1 mb-0">{{ number_format($product_count) }}</h3>
                        </div>
                   </div>
              </div>
              <div class="card-footer border-0 py-2 bg-light bg-opacity-50">
                   <div class="d-flex align-items-center justify-content-between">
                        <div>
                             <span class="text-muted ms-1 fs-12">All</span>
                        </div>
                        <a href="{{ route('cms.product.index') }}" class="text-reset fw-semibold fs-12">View More</a>
                   </div>
              </div>
         </div>
    </div>

    <div class="col-md-6 col-xl-3">
         <div class="card">
              <div class="card-body">
                   <div class="row">
                        <div class="col-6">
                             <div class="avatar-md bg-light bg-opacity-50 rounded">
                                  <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-warning avatar-title"></iconify-icon>
                             </div>
                        </div>
                        <div class="col-6 text-end">
                             <p class="text-muted mb-0 text-truncate">Layanan</p>
                             <h3 class="text-dark mt-1 mb-0">{{ number_format($service_count) }}</h3>
                        </div>
                   </div>
              </div>
              <div class="card-footer border-0 py-2 bg-light bg-opacity-50">
                   <div class="d-flex align-items-center justify-content-between">
                        <div>
                             <span class="text-muted ms-1 fs-12">All</span>
                        </div>
                        <a href="{{ route('cms.service.index') }}" class="text-reset fw-semibold fs-12">View More</a>
                   </div>
              </div>
         </div>
    </div>

    <div class="col-md-6 col-xl-3">
         <div class="card">
              <div class="card-body">
                   <div class="row">
                        <div class="col-6">
                             <div class="avatar-md bg-light bg-opacity-50 rounded">
                                  <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-danger avatar-title"></iconify-icon>
                             </div>
                        </div>
                        <div class="col-6 text-end">
                             <p class="text-muted mb-0 text-truncate">Proyek</p>
                             <h3 class="text-dark mt-1 mb-0">{{ number_format($project_count) }}</h3>
                        </div>
                   </div>
              </div>
              <div class="card-footer border-0 py-2 bg-light bg-opacity-50">
                   <div class="d-flex align-items-center justify-content-between">
                        <div>
                             <span class="text-muted ms-1 fs-12">All</span>
                        </div>
                        <a href="{{ route('cms.project.index') }}" class="text-reset fw-semibold fs-12">View More</a>
                   </div>
              </div>
         </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush
