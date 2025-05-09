<div class="sticky-wrapper">
    <div class="menu-area">
        <div class="container th-container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ asset('logo-admiral.png') }}" alt="ADMIRAL"></a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block sticky-d-none">
                    <div class="info-card-wrap">
                        <div class="info-card">
                            <div class="info-card_icon">
                                <img src="{{ asset('assets-front/img/icon/call2.svg') }}" alt="">
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Call Us Any Time:</p>
                                <a href="tel:+622184346917" class="info-card_link">+62 21-8434-6917</a>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-card_icon">
                                <i class="fa-light fa-envelope-dot"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Email Us:</p>
                                <a href="mailto:sales@admiralinstrument.com" class="info-card_link">sales@admiralinstrument.com</a>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-card_icon">
                                <i class="fa-light fa-location-dot"></i>
                            </div>
                            <div class="info-card_content">
                                <span class="info-card_label">Location Address:</span>
                                <p class="info-card_link">Jawa Barat, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto sticky-d-block">
                    <nav class="main-menu d-none d-lg-inline-block">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('service') }}">Service</a></li>
                            <li><a href="{{ route('products') }}">Product</a></li>
                            <li><a href="{{ route('project') }}">Project</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-auto d-lg-none">
                    <button class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                </div>
            </div>
            <div class="main-menu-area">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('service') }}">Service</a></li>
                                <li><a href="{{ route('products') }}">Product</a></li>
                                <li><a href="{{ route('project') }}">Project</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <button type="button" class="simple-btn searchBoxToggler"><i class="far fa-search"></i></button>
                            <a href="#" class="simple-btn sideMenuToggler"><i class="fa-solid fa-grid"></i></a>
                            <a href="{{ route('contact-us') }}" class="th-btn style6 th-style th-icon">GET A QUOTE<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
