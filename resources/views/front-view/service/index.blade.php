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
                @forelse ($services as $service)
                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2" data-bg-src="{{ asset('assets-front/img/bg/shape_bg_1.png') }}">
                        <div class="service-content">
                            <img src="{{ asset('assets/img/service/'. $service->image ?? '-')}}" class="img-service" alt="Service">
                        </div>
                        <h3 class="box-title"><a href="#!">{{ $service->name }}</a></h3>
                        <p class="service-box_text">{{ $service->description }}</p>
                        {{-- <a class="line-btn" href="#!">Read More <i class="fas fa-arrow-right ms-2"></i></a> --}}
                    </div>
                </div>
                @empty
                <h3>Service Not Found!</h3>
                @endforelse
            </div>
        </div>
    </section>
    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area2" data-overlay="title" data-opacity="9" data-bg-src="{{ asset('assets-front/img/bg/cta_bg_1.jpg') }}">
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
                        <a href="{{ route('contact-us') }}" class="th-btn style1 th-icon">Consult With Us Today<i class="fa-regular fa-arrow-right ms-2"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-shape">
            <img src="assets/img/normal/cta_1.png" alt="">
        </div>
    </section>
@endsection
