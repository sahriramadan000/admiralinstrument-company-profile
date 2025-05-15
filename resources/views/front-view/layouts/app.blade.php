<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-view.layouts.partials.head')
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=6285715919303&text=" class="btn-whatsapp">
        <div class="section-whatsapp">
            <img src="{{ asset('whatsapp.png') }}" alt="whatsapp">
        </div>
    </a>
    <!--********************************
   		Code Start From Here
	******************************** -->
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!--==============================
     Preloader
  ==============================-->
    <div id="preloader" class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading">
                    <span preloader-text="A" class="characters">A </span>

                    <span preloader-text="D" class="characters">D</span>

                    <span preloader-text="M" class="characters">M</span>

                    <span preloader-text="I" class="characters">I</span>

                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="L" class="characters">L</span>
                </div>
            </div>
        </div>
    </div>
    {{-- <!--==============================
        Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper sidemenu-info ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="home-company.html"><img src="assets/img/logo.svg" alt="Kotar"></a>
                    </div>
                    <p class="about-text">Construction services offer tailored solutions to meet the unique needs and specifications of each project.</p>
                    <div class="th-social style2">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar"></i>24 Feb , 2024</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Where Vision Meets Concrete
                                    Reality</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar"></i>22 Feb , 2024</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Raising the Bar in Construction.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Contact Us</h3>
                <div class="th-widget-about">
                    <h4 class="footer-info-title">Address Location</h4>
                    <p class="footer-info"><i class="fas fa-map-marker-alt"></i>138 MacArthur Ave, USA</p>
                    <h4 class="footer-info-title">Phone Number</h4>
                    <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a class="text-inherit" href="tel:+19524357106">+1 952-435-7106</a></p>
                    <h4 class="footer-info-title">Email Address</h4>
                    <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit" href="mailto:info@kotar.com">info@kotar.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div> --}}
    <!--==============================
        Mobile Menu
    ============================== -->
        @include('front-view.layouts.partials.navbar-mobile')
    <!--==============================
        Header Area
    ==============================-->
    <header class="th-header  header-layout3">
        <!-- Main Menu -->
        @include('front-view.layouts.partials.navbar')
    </header>

    @yield('content')
    <!--==============================
        Footer Area
    ==============================-->
    @include('front-view.layouts.partials.footer')

    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>



    <!--==============================
        All Js File
    ============================== -->
   @include('front-view.layouts.partials.foot')
</body>

</html>
