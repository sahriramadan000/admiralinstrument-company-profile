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
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-company.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
About Area
==============================-->
<div class="overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="img-box3">
                    <div class="img1">
                        <img src="{{ asset('assets-front/img/normal/about_3.jpg') }}" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-20 pe-xl-5 me-xl-5">
                    <span class="sub-title style1">About Us Company</span>
                    <h2 class="sec-title mb-20">Innovating with Global Standards</h2>
                </div>
                <p class="sec-text mb-30">PT Sukses Analitika Instrumen, under the ADMIRAL brand, was established in 2023 with a mission to provide high-quality measurement solutions. We focus on innovation and compliance, adopting technologies that meet international standards such as US-EPA and EN certifications.</p>

                <div class="about-item-wrap">
                    <div class="about-item">
                        <div class="about-item_img"><img src="{{ asset('assets-front/img/icon/about_1_1.svg')}}" alt=""></div>
                        <div class="about-item_centent">
                            <h5 class="box-title">Quality and Skilled Local Team</h5>
                            <p class="about-item_text">Our entire workforce consists of highly skilled Indonesian professionals, committed to producing reliable and accurate instruments backed by strong after-sales support.</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-item_img"><img src="{{ asset('assets-front/img/icon/about_1_2.svg')}}" alt=""></div>
                        <div class="about-item_centent">
                            <h5 class="box-title">Certified & Connected to KLHK</h5>
                            <p class="about-item_text">Our products have passed QAL 2 assessments and are officially recognized by Indonesia’s Ministry of Environment, ensuring international standard compliance and environmental reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
