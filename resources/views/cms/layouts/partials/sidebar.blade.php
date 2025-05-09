<!-- Sidebar Logo -->
<div class="logo-box">
    <a href="{{ route('cms.dashboard') }}" class="logo-dark">
         <img src="{{ asset('logo-admiral-no-text.png') }}" class="logo-sm" style="height: 35px;" alt="logo sm">
         {{-- <img src="{{ asset('logo-admiral.png') }}" class="logo-lg" style="height: 35px;" alt="logo dark"> --}}
    </a>

    <a href="{{ route('cms.dashboard') }}" class="logo-light">
         <img src="{{ asset('logo-admiral-no-text.png') }}" class="logo-sm" style="height: 35px;" alt="logo sm">
         {{-- <img src="{{ asset('logo-admiral.png') }}" class="logo-lg" style="height: 35px;" alt="logo light"> --}}
    </a>
</div>

<!-- Menu Toggle Button (sm-hover) -->
<button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
    <iconify-icon icon="solar:hamburger-menu-broken" class="button-sm-hover-icon"></iconify-icon>
</button>

<div class="scrollbar" data-simplebar>

    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title">Menu</li>

        <li class="nav-item">
              <a class="nav-link" href="{{ route('cms.dashboard') }}">
                   <span class="nav-icon">
                        <iconify-icon icon="solar:home-2-broken"></iconify-icon>
                   </span>
                   <span class="nav-text"> Dashboard </span>
              </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link menu-arrow" href="#Content" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Content">
                <span class="nav-icon">
                    <iconify-icon icon="solar:widget-add-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Content </span>
            </a>
            <div class="collapse" id="Content">
                 <ul class="nav sub-navbar-nav">
                      <li class="sub-nav-item">
                           <a class="sub-nav-link" href="#!">Pages</a>
                      </li>
                      <li class="sub-nav-item">
                           <a class="sub-nav-link" href="#!">Events</a>
                      </li>
                      <li class="sub-nav-item">
                           <a class="sub-nav-link" href="#!">FAQ</a>
                      </li>
                 </ul>
            </div>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cms.product-category.index') }}">
                <span class="nav-icon">
                    <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Kategori Produk </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cms.product.index') }}">
                <span class="nav-icon">
                    <iconify-icon icon="solar:box-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Produk </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cms.service.index') }}">
                <span class="nav-icon">
                    <iconify-icon icon="solar:crown-star-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Layanan </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cms.project.index') }}">
                <span class="nav-icon">
                    <iconify-icon icon="solar:medal-ribbons-star-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Proyek </span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('cms.users.index') }}">
                <span class="nav-icon">
                    <iconify-icon icon="solar:incognito-broken"></iconify-icon>
                </span>
                <span class="nav-text"> Manajemen Pengguna </span>
            </a>
        </li>
    </ul>
</div>
