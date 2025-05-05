<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets-front/img/bg/footer_bg_1.png') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('logo-admiral.png') }}" alt="Admiral"></a>
                            </div>
                            <p class="about-text">ADMIRAL is a reliable Indonesian brand focused on delivering innovative measurement solutions that meet international standards.</p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('service') }}">Service</a></li>
                                <li><a href="{{ route('products') }}">Product</a></li>
                                <li><a href="{{ route('project') }}">Project</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="th-widget-about">
                            <h4 class="footer-info-title">Address Location</h4>
                            <p class="footer-info"><i class="fas fa-map-marker-alt"></i>PT. Sukses Analitika Instrumen, Kavling pesona lembah Cidahu No.1 Blok A, Tanimulya, Ngamprah, Bandung Barat, Jawa Barat, Indonesia.</p>
                            <h4 class="footer-info-title">Phone Number</h4>
                            <p class="footer-info"><i class="fa-sharp fa-solid fa-phone"></i><a class="text-inherit" href="tel:+622184346917">+62 21-8434-6917</a></p>
                            <h4 class="footer-info-title">Email Address</h4>
                            <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit" href="mailto:sales@admiralinstrument.com">sales@admiralinstrument.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <div class="newsletter-widget">
                            <p class="title md-10">Subscribe to our newsletter and get updates directly to your inbox.</p>
                            <div class="footer-search-contact mt-25">
                                <form>
                                    <input class="form-control" type="email" placeholder="Email Address">
                                </form>
                                <div class="footer-btn mt-10">
                                    <button type="submit" class="th-btn style1 btn-fw">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright 2025 <a href="{{ route('home') }}">Admiralinstrument</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-end d-none d-md-block">
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
