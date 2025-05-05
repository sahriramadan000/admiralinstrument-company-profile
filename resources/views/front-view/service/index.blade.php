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
                <h1 class="breadcumb-title">Our Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Servce Area
    ==============================-->
    <section class="service-area overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row mb-5">
                <div class="title-area mb-0 text-center">
                    <span class="sub-title">Our Services</span>
                    <h2 class="sec-title">The Best Service For You</h2>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_1.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">01</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Building Construction</a></h3>
                        <p class="service-box_text">Certainly, I can provide some general details about the construction industry. If you have a specific aspect.</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_2.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">02</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Interior Designing</a></h3>
                        <p class="service-box_text">Construction services also encompass renovating and existing structures to update them change layout.</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_3.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">03</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">General Contracting</a></h3>
                        <p class="service-box_text">This includes building homes, apartments, and housing units. It can involve single-family homes and more.</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_4.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">04</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Architecture Design</a></h3>
                        <p class="service-box_text">Architectural wonders await firms offer project Our management services. Along with design architecture firms</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_5.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">05</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">House Renovation</a></h3>
                        <p class="service-box_text">Where ideas take shape architecture often offer project in Our management services used in and around a home</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <div class="service-box_icon">
                                <img src="{{ asset('assets-front/img/icon/service_1_6.svg')}}" alt="icon">
                            </div>
                            <div class="service-box_number">06</div>
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Material Supply</a></h3>
                        <p class="service-box_text">Material supply can refer to the process of providing and delivering various materials needed for a project</p>
                        <a class="line-btn" href="service-details.html">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area2" data-overlay="title" data-opacity="9" data-bg-src="assets/img/bg/cta_bg_1.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="title-area mb-0 text-center text-lg-start">
                        <span class="sub-title style1 mb-20">Get Consultation</span>
                        <h2 class="sec-title text-white">Need Help Choosing the Right Instrument <span class="text-theme">?</span></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-group justify-content-lg-end justify-content-center">
                        <a href="contact.html" class="th-btn style1 th-icon">Consult With Us Today<i class="fa-regular fa-arrow-right ms-2"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-shape">
            <img src="assets/img/normal/cta_1.png" alt="">
        </div>
    </section>
@endsection
