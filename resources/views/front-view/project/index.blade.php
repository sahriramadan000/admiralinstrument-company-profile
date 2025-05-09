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
                <h1 class="breadcumb-title">Our Projects</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Our Projects</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Team Area
    ==============================-->
    <section class="space">
        <div class="container">
            <div class="title-area text-center mb-40">
                <span class="sub-title">Latest Projects</span>
                <h2 class="sec-title">Let’s See Our Latest Projects</h2>
            </div>
            <div class="row gallery-row">

                @forelse ($project as $proj)
                <!-- Single Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-box">
                        <div class="project-box-img">
                            <img src="{{ asset('assets/img/project/'. $proj->image)}}" class="img-project" alt="project image">
                        </div>
                        <div class="project-box-content">
                            <p class="project-subtitle">{{ $proj->category ?? '-' }}</p>
                            <h3 class="box-title"><a href="#!">{{ $proj->name ?? '-' }}</a></h3>
                            <a href="{{ asset('assets/img/project/'. $proj->image)}}" class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>Project Not Found!</h3>
                @endforelse
            </div>
        </div>
    </section>
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
@endsection
