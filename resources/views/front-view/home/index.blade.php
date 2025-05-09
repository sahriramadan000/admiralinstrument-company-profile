@extends('front-view.layouts.app')

@section('style')

@endsection

@section('content')
    <!--==============================
    Hero Area
    ==============================-->
    <div class="th-hero-wrapper hero-3" id="hero">
        <div class="swiper th-slider hero-slider-3" id="heroSlide3" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('assets-front/img/banner-hero/banner-1.jpg') }}">
                            <img src="{{ asset('assets-front/img/hero/hero_overlay_3.png') }}" alt="Hero Image">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s">
                                <img src="{{ asset('assets-front/img/hero/hero_overlay_3_1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="container">
                            <div class="hero-style3">
                                <div class="hero-meta">
                                    <span data-ani="slideindown" data-ani-delay="0.1s">
                                        <img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">
                                    </span>
                                    <span data-ani="slideindown" data-ani-delay="0.2s">Innovate</span>
                                    <span data-ani="slideindown" data-ani-delay="0.3s">Comply</span>
                                    <span data-ani="slideindown" data-ani-delay="0.4s">Lead</span>
                                </div>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.4s">
                                    Cutting-edge <span class="hero-text">Environmental Solutions</span>
                                </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('about-us') }}" class="th-btn style1 th-style th-icon">Discover More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('assets-front/img/banner-hero/banner-2.jpg') }}">
                            <img src="{{ asset('assets-front/img/hero/hero_overlay_3.png')}}" alt="Hero Image">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s">
                                <img src="{{ asset('assets-front/img/hero/hero_overlay_3_1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="container">
                            <div class="hero-style3">
                                <div class="hero-meta">
                                    <span data-ani="slideindown" data-ani-delay="0.1s">
                                        <img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">
                                    </span>
                                    <span data-ani="slideindown" data-ani-delay="0.2s">Test</span>
                                    <span data-ani="slideindown" data-ani-delay="0.3s">Assure</span>
                                    <span data-ani="slideindown" data-ani-delay="0.4s">Deliver</span>
                                </div>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.4s">
                                    International <span class="hero-text">Quality Assurance</span>
                                </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('about-us') }}" class="th-btn style1 th-style th-icon">Discover More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('assets-front/img/banner-hero/banner-3.jpg') }}">
                            <img src="{{ asset('assets-front/img/hero/hero_overlay_3.png')}}" alt="Hero Image">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.7s">
                                <img src="{{ asset('assets-front/img/hero/hero_overlay_3_1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="container">
                            <div class="hero-style3">
                                <div class="hero-meta">
                                    <span data-ani="slideindown" data-ani-delay="0.1s">
                                        <img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">
                                    </span>
                                    <span data-ani="slideindown" data-ani-delay="0.2s">Support</span>
                                    <span data-ani="slideindown" data-ani-delay="0.3s">Sustain</span>
                                    <span data-ani="slideindown" data-ani-delay="0.4s">Succeed</span>
                                </div>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.4s">
                                    Reliable <span class="hero-text">After-Sales Service</span>
                                </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('about-us') }}" class="th-btn style1 th-style th-icon">Discover More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#heroSlide3" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#heroSlide3" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
    Process Area
    ==============================-->
    <section class="process-sec3 overflow-hidden space" id="process-sec">
        <div class="container th-container">
            <div class="process-card-area">
                <div class="row gy-4 align-items-center">
                    <div class="col-md-6 col-xl-3">
                        <div class="title-area mb-0  text-center text-md-start">
                            <span class="sub-title style2"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Our Work Process</span>
                            <h2 class="sec-title text-white mb-0">Delivering Innovative</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="process-card">
                            <span class="process-card_subtitle">Step - 01</span>
                            <div class="process-card_icon">
                                <img src="{{ asset('assets-front/img/icon/process-icon-1-1.svg') }}" alt="icon">
                            </div>
                            <h4 class="box-title">Research & Development</h4>
                            <p class="process-card_text">We continuously innovate by adopting global technologies and designing instruments that comply with US-EPA and EN standards.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="process-card">
                            <span class="process-card_subtitle">Step - 02</span>
                            <div class="process-card_icon">
                                <img src="{{ asset('assets-front/img/icon/process-icon-1-2.svg')}}" alt="icon">
                            </div>
                            <h4 class="box-title">Quality Assurance</h4>
                            <p class="process-card_text">Each product undergoes rigorous testing and QAL 2 assessment to ensure compliance with international and environmental regulations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="process-card">
                            <span class="process-card_subtitle">Step - 03</span>
                            <div class="process-card_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_3.svg')}}" alt="icon">
                            </div>
                            <h4 class="box-title">After-Sales Support</h4>
                            <p class="process-card_text">Our skilled Indonesian team provides guaranteed after-sales service, ensuring long-term reliability and customer satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    About Area
    ==============================-->
    <div class="overflow-hidden space-bottom" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4 me-xl-5 pe-xl-2">
                        <div class="img1">
                            <img src="{{ asset('assets-front/img/project/project-1.jpg') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-25">
                        <span class="sub-title style2"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Let's Grow Together with ADMIRAL</span>
                        <h2 class="sec-title mb-20">Innovating Measurement Standards, Shaping the Future.</h2>
                    </div>
                    <p class="sec-text mb-30">PT Sukses Analitika Instrumen, established in 2023 under the "ADMIRAL" brand, innovates with a global outlook, adopting designs and technologies that comply with US-EPA and EN standards.

                        Supported by a fully skilled Indonesian workforce, ADMIRAL ensures reliable after-sales service. We source raw materials both locally and internationally to maintain quality.

                        ADMIRAL has successfully passed the QAL 2 assessment and is officially connected with Indonesia’s Ministry of Environment, affirming our compliance with international standards.</p>

                    <div class="about-item-wrap">
                        <div class="about-item style2">
                            <div class="about-item_centent">
                                <h5 class="box-title"><span class="text-theme">QAL 2</span> Certified</h5>
                                <p class="about-item_text">Successfully passed international standard QAL 2 assessments.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_centent">
                                <h5 class="box-title"><span class="text-theme">Global </span>  Quality Materials</h5>
                                <p class="about-item_text">Combining high-quality local and imported raw materials for best performance.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('about-us') }}" class="th-btn th-style th-icon">More About Us <i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee-section overflow-hidden">
        <div class="marquee-wrapper">
            <div class="marquee">
                <div class="marquee-group">
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Research & Development</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Innovative Solutions</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Certified Instruments</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">US-EPA Standards</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Environmental Compliance</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Quality Assurance</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">QAL 2 Testing</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">After-Sales Support</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Reliable Service</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Customer Satisfaction</div>
                </div>
                <div aria-hidden="true" class="marquee-group">
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Research & Development</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Innovative Solutions</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Certified Instruments</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">US-EPA Standards</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Environmental Compliance</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Quality Assurance</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">QAL 2 Testing</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">After-Sales Support</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Reliable Service</div>
                    <div class="text"><img src="{{ asset('assets-front/img/icon/marquee-icon.svg') }}" alt="">Customer Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="service-area4 space" id="service-sec" data-bg-src="{{ asset('assets-front/img/bg/service_bg_3.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title style2"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Our Services</span>
                        <h2 class="sec-title">Innovative Solutions for Environmental Monitoring</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @forelse ($services as $service)
                        <div class="swiper-slide">
                            <div class="service-item th-ani">
                                <div class="service-item_img">
                                    <img src="{{ asset('assets/img/service/'. $service->image ?? '-')}}" class="img-service" alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <h3 class="box-title"><a href="#!">{{ $service->name }}</a></h3>
                                    <p class="service-item_text">{{ $service->description }}</p>
                                    {{-- <a href="#!" class="icon-btn th-icon"><i class="fa-regular fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3>Service Not Found!</h3>
                        @endforelse
                        @forelse ($services as $service)
                        <div class="swiper-slide">
                            <div class="service-item th-ani">
                                <div class="service-item_img">
                                    <img src="{{ asset('assets/img/service/'. $service->image ?? '-')}}" class="img-service" alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <h3 class="box-title"><a href="#!">{{ $service->name }}</a></h3>
                                    <p class="service-item_text">{{ $service->description }}</p>
                                    {{-- <a href="#!" class="icon-btn th-icon"><i class="fa-regular fa-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
                <button data-slider-prev="#serviceSlider4" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#serviceSlider4" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <div class="choose-area overflow-hidden" data-bg-src="{{ asset('assets-front/img/bg/choose_bg_1.jpg') }}">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">

                <div class="col-xl-6">
                    <div class="choose-tab-area ms-xl-5">
                        <div class="title-area mb-20">
                            <span class="sub-title style2"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Company Vision & Mission</span>
                            <h2 class="sec-title text-white">Building a Healthy and Professional Business</h2>
                            <p class="choose-text mb-0">We are committed to building a healthy business that contributes to national economic growth with high professionalism and the best solutions for our business partners.</p>
                        </div>
                        <div class="choose-tabs-wrapper">
                            <div class="nav nav-tabs choose-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2" type="button">Mission</button>
                                <button class="nav-link" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button">Vision</button>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-step2" role="tabpanel">
                                    <div class="mission-content">
                                        <h3 class="box-title text-white">Our Mission</h3>
                                        <p class="mission-text">Providing the best solutions to business partners, ensuring work according to the contract, and carrying out projects according to strict standard operating procedures (SOP).</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                                    <div class="mission-content">
                                        <h3 class="box-title text-white">Our Vision</h3>
                                        <p class="mission-text">Building a healthy and professional business, contributing to national economic growth, and creating long-term, mutually beneficial partnerships.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-image">
                        <img src="{{ asset('assets-front/img/normal/choose_img_1.jpg') }}" alt="">
                        <span class="choose-text">Vision & Mission</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==============================
    Team Area
    ==============================-->
    {{-- <section class="space">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title style2"><img src="assets/img/theme-img/title_left.svg" alt="shape">Team Members</span>
                <h2 class="sec-title">Meet Our Renovation Experts</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/team_5_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">David Latham</a></h3>
                                        <span class="team-desig">Renovation Expert</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="plus-btn">
                                            <i class="fa-light fa-plus"></i>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" tabindex="0"><i class="fab fa-youtube"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/team_5_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Henry Michel</a></h3>
                                        <span class="team-desig">Renovation Expert</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="plus-btn">
                                            <i class="fa-light fa-plus"></i>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" tabindex="0"><i class="fab fa-youtube"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/team_5_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Rehana komlay</a></h3>
                                        <span class="team-desig">Renovation Expert</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="plus-btn">
                                            <i class="fa-light fa-plus"></i>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" tabindex="0"><i class="fab fa-youtube"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/team_5_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Alex Carlose</a></h3>
                                        <span class="team-desig">Renovation Expert</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="plus-btn">
                                            <i class="fa-light fa-plus"></i>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" tabindex="0"><i class="fab fa-youtube"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-item">
                                <div class="team-img">
                                    <img src="assets/img/team/team_5_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">David Latham</a></h3>
                                        <span class="team-desig">Renovation Expert</span>
                                    </div>
                                    <div class="team-social">
                                        <div class="plus-btn">
                                            <i class="fa-light fa-plus"></i>
                                        </div>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/" tabindex="0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://www.twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.youtube.com/" tabindex="0"><i class="fab fa-youtube"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==============================
    Faq Area
    ==============================-->
    {{-- <div class="faq-area2 position-relative space overflow-hidden" id="faq-sec">
        <div class="container th-container2">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="faq-img2">
                        <div class="img1">
                            <img src="assets/img/normal/faq_img2.jpg" alt="faq">
                        </div>
                        <div class="about-company-since-wrap">
                            <div class="experience-wrap">
                                <span>SINCE IN</span>1996
                            </div>
                            <div class="about-tag">
                                <span class="about-anime">We Are The Best Renovation Company</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-30">
                        <span class="sub-title style2"><img src="assets/img/theme-img/title_left.svg" alt="shape">Some Faq</span>
                        <h2 class="sec-title">Final Inspections, Occupancy Permits, And Project.</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">


                        <div class="accordion-card style3">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">How can I ensure safety on a construction site?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Ensuring safety on a construction site is crucial to protect workers, visitors, and the overall success of the project. Here are some key steps to enhance safety on a construction site</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style3">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">What is the typical timeline for a construction project?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Throughout these stages, contractors, engineers, and project managers collaborate to ensure successful project execution, adhering to timelines and budget constraints.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card style3">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How we get our project planning?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Project planning is a crucial step in ensuring the success of any construction project. Here are the key steps to develop an effective project plan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area3 space mt-3" data-overlay="title" data-opacity="9" data-bg-src="{{ asset('assets-front/img/bg/cta_bg_1.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area text-center mb-0 text-lg-start">
                        <span class="sub-title style2 mb-20"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Get Consultation</span>
                        <h2 class="sec-title text-white">Need Help Choosing the Right Instrument <span class="text-theme">?</span></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-group justify-content-lg-end justify-content-center">
                        <a href="{{ route('contact-us') }}" class="th-btn style1 th-style th-icon">Consult With Us Today<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Project Area
    ==============================-->
    <section class="project-area4 overflow-hidden space">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-xl-7">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title style2"><img src="{{ asset('assets-front/img/theme-img/title_left.svg') }}" alt="shape">Latest
                            Work Gallery</span>
                        <h2 class="sec-title">Elevating Industry, Enabling Compliance through</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-xl-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#projectSlider4" class="slider-arrow style4 default"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#projectSlider4" class="slider-arrow style4 default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container th-container">
            <div class="slider-area">
                <div class="swiper th-slider has-shadow project-slider4" id="projectSlider4" data-slider-options='{"paginationType":"fraction","centeredSlides":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @forelse ($project as $proj)
                        <div class="swiper-slide">
                            <div class="project-item style2">
                                <div class="project-item-img">
                                    <img src="{{ asset('assets/img/project/'. $proj->image)}}" alt="project image">
                                </div>
                                <div class="project-item-content">
                                    <h3 class="box-title"><a href="#!">{{ $proj->category ?? '-' }}</a></h3>
                                    <p class="project-subtitle">{{ $proj->name ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3>Project Not Found!</h3>
                        @endforelse
                        @forelse ($project as $proj)
                        <div class="swiper-slide">
                            <div class="project-item style2">
                                <div class="project-item-img">
                                    <img src="{{ asset('assets/img/project/'. $proj->image)}}" alt="project image">
                                </div>
                                <div class="project-item-content">
                                    <h3 class="box-title"><a href="#!">{{ $proj->category ?? '-' }}</a></h3>
                                    <p class="project-subtitle">{{ $proj->name ?? '-' }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!--==============================
    Brand Area
    ==============================-->
    {{-- <div class="brand-sec3 space-bottom">
        <div class="container th-container">
            <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_5.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_6.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item style2 wow fadeInLeft">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_3_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="brand-shape"></div>
    </div> --}}
@endsection
