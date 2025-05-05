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
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Contact Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row gy-40 gx-30">
                <div class="col-xl-4 col-lg-6">
                    <div class="title-area mb-30">
                        <h3 class="sec-title">Contact Information</h3>
                    </div>
                    <div class="contact-info-wrap">
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-location-dot"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">Our Address</p>
                                <a href="https://www.google.com/maps" class="contact-info_link">PT. Sukses Analitika Instrumen, Kavling pesona lembah Cidahu No.1 Blok A, Tanimulya, Ngamprah, Bandung Barat, Jawa Barat, Indonesia.</a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-phone"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">Contact Number</p>
                                <a href="tel:+622184346917" class="contact-info_link">Mobile: +62 21-8434-6917</a>
                                <a href="mailto:sales@admiralinstrument.com" class="contact-info_link">Email: sales@admiralinstrument.com</a>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class="fa-light fa-clock"></i></div>
                            <div class="media-body">
                                <p class="contact-info_label">Working Hours</p>
                                <span class="contact-info_link">Monday - Saturday: 8:00 - 15:00</span>
                                <span class="contact-info_link">Sunday: <span class="text-theme">Closed</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Contact Area
    ==============================-->
    <div class="space-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="">
                        <div class="title-area mb-30">
                            <span class="sub-title style1">Get In Touch</span>
                            <h2 class="sec-title">Have An Upcoming Projects? Let’s Talk to Now!</h2>
                        </div>
                        <form action="#" method="POST" class="contact-form2 style2 ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="" disabled selected hidden>Select Subjects</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Industry">Industry</option>
                                        <option value="Architect">Architect</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn th-radius2">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-image style2">
                        <img src="{{ asset('assets-front/img/normal/contact-image.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
