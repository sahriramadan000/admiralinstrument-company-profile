@extends('front-view.layouts.app')

@section('style')

@endsection

@section('content')
<!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets-front/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Products</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Product Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h3 class="woocommerce-result-count">Admiral Product</h3>
                    </div>

                    <div class="col-md-auto">
                        <form class="woocommerce-ordering" method="get" action="{{ route('products') }}" id="category-filter-form">
                            <select name="category" class="orderby" aria-label="Category" id="category-select">
                                <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>Default Sorting</option>
                                @foreach ($productCategory as $pc)
                                    <option value="{{ $pc->id }}" {{ request('category') == $pc->id ? 'selected' : '' }}>{{ $pc->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-md-auto">
                        <div class="nav" role=tablist>
                            <a href="#" class="active" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                        <div class="row gy-40">
                            @forelse ($products as $prod)
                            <div class="col-xl-3 col-sm-6">
                                <div class="th-product">
                                    <div class="product-img">
                                        <img src="{{ $prod->image1 ? asset('assets/img/product/' . $prod->image1) : '' }}" class="main-img-product" alt="Product Image">
                                        <span class="product-tag">New</span>
                                        <div class="actions">
                                            <a href="#QuickView"
                                                class="icon-btn popup-content"
                                                data-id="{{ $prod->id }}"
                                                data-name="{{ $prod->name }}"
                                                data-price="{{ $prod->price ?? 'Rp 0' }}"
                                                data-description="{{ $prod->description }}"
                                                data-stock="{{ $prod->is_available ? 'In Stock' : 'Out of Stock' }}"
                                                {{-- Image --}}
                                                data-image1="{{ $prod->image1 ? asset('assets/img/product/' . $prod->image1) : '' }}"
                                                data-image2="{{ $prod->image2 ? asset('assets/img/product/' . $prod->image2) : '' }}"
                                                data-image3="{{ $prod->image3 ? asset('assets/img/product/' . $prod->image3) : '' }}"
                                                data-image4="{{ $prod->image4 ? asset('assets/img/product/' . $prod->image4) : '' }}"
                                                {{-- PDF --}}
                                                data-pdf1="{{ $prod->pdf1 ? asset('assets/pdf/product/' . $prod->pdf1) : '' }}"
                                                data-pdf2="{{ $prod->pdf2 ? asset('assets/pdf/product/' . $prod->pdf2) : '' }}"
                                                data-pdf3="{{ $prod->pdf3 ? asset('assets/pdf/product/' . $prod->pdf3) : '' }}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#!">{{ $prod->name }}</a></h3>
                                        <small>Category: {{ $prod->category->name ?? '-' }}</small>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h3 class="text-center">Produk belum Tersedia!</h3>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-pagination text-center pt-50">
                {{ $products->withQueryString()->links('pagination::default') }}
            </div>
        </div>
    </section>

    <!--==============================
    Product Lightbox
    ==============================-->
    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img gallery-slider">
                        <div class="img"><img id="quickview-img-main" src="" alt="Product Image" class="main-img w-100 rounded"></div>
                        <hr>
                        <div class="quickview-thumbnails d-flex justify-content-center gap-2 mt-3 flex-wrap">
                            <img src="" alt="Image 1" class="thumb-img d-none" id="thumb-img-1" onclick="setQuickViewMain(this)">
                            <img src="" alt="Image 2" class="thumb-img d-none" id="thumb-img-2" onclick="setQuickViewMain(this)">
                            <img src="" alt="Image 3" class="thumb-img d-none" id="thumb-img-3" onclick="setQuickViewMain(this)">
                            <img src="" alt="Image 4" class="thumb-img d-none" id="thumb-img-4" onclick="setQuickViewMain(this)">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <h2 class="product-title">-</h2>
                        <p class="text">-</p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">Availability:</strong>
                                <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>-</span>
                            </p>
                        </div>

                        <div class="mt-3">
                            <strong>Dokumen Produk:</strong>
                            <ul id="quickview-pdf-links" class="list-unstyled mb-0"></ul>
                        </div>
                        {{-- <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Add to Cart</button>
                            <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">wheel-fits-chevy-camaro</span></span>
                            <span class="posted_in">Category: <a href="shop.html">Tires & Wheels</a></span>
                            <span>Tags: <a href="shop.html">automotive</a><a href="shop.html">partswheels</a></span>
                        </div> --}}
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function setQuickViewMain(el) {
        const mainImg = document.getElementById('quickview-img-main');
        mainImg.src = el.src;

        // Toggle active class
        document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
        el.classList.add('active');
    }

    document.getElementById('category-select').addEventListener('change', function () {
        document.getElementById('category-filter-form').submit();
    });

    document.querySelectorAll('.popup-content').forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = document.getElementById('QuickView');

            const image1 = this.dataset.image1 || '/assets/img/default.jpg';
            const image2 = this.dataset.image2 || '';
            const image3 = this.dataset.image3 || '';
            const image4 = this.dataset.image4 || '';

            const mainImg = modal.querySelector('#quickview-img-main');
            mainImg.src = image1;

            const thumb1 = modal.querySelector('#thumb-img-1');
            const thumb2 = modal.querySelector('#thumb-img-2');
            const thumb3 = modal.querySelector('#thumb-img-3');
            const thumb4 = modal.querySelector('#thumb-img-4');

            if (image1) {
                thumb1.src = image1;
                thumb1.classList.remove('d-none');
            } else {
                thumb1.classList.add('d-none');
            }

            if (image2) {
                thumb2.src = image2;
                thumb2.classList.remove('d-none');
            } else {
                thumb2.classList.add('d-none');
            }

            if (image3) {
                thumb3.src = image3;
                thumb3.classList.remove('d-none');
            } else {
                thumb3.classList.add('d-none');
            }

            if (image4) {
                thumb4.src = image4;
                thumb4.classList.remove('d-none');
            } else {
                thumb4.classList.add('d-none');
            }

            // Set default active thumbnail
            document.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active'));
            if (image1) {
                const firstThumb = [thumb1, thumb2, thumb3, thumb4].find(img => img && !img.classList.contains('d-none'));
                if (firstThumb) {
                    firstThumb.classList.add('active');
                }
            }

            // Info Produk
            modal.querySelector('.product-title').textContent = this.dataset.name;
            modal.querySelector('.text').textContent = this.dataset.description;
            modal.querySelector('.stock').innerHTML = this.dataset.stock === 'In Stock'
                ? '<i class="far fa-check-square me-2 ms-1"></i>In Stock'
                : '<i class="far fa-times-circle me-2 ms-1"></i>Out of Stock';

            // PDF
            const pdfLinks = modal.querySelector('#quickview-pdf-links');
            pdfLinks.innerHTML = ''; // Clear dulu
            console.log(this.dataset);

            for (let i = 1; i <= 3; i++) {
                const pdf = this.dataset[`pdf${i}`];
                if (pdf) {
                    const li = document.createElement('li');
                    li.innerHTML = `<a href="${pdf}" target="_blank">Download PDF ${i}</a>`;
                    pdfLinks.appendChild(li);
                }
            }
        });
    });
</script>
@endpush
