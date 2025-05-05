@extends('auth.layouts.app')

@section('content-auth')
<section class="section-box box-content-login">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="box-form-register">
                    <h3 class="fs-20 fw-bolder mb-2 text-center">Password Changed!</h3>
                    <p class="fs-5 fw-medium text-muted text-center mb-5">Your password has been changed successfully.</p>
                    <div style="margin-top: 30px;">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-black btn-rounded w-100">
                            Back to Login
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-image-banner-login">
                    <img src="{{ asset('assets-login/imgs/page/login/banner.png') }}" alt="Image">
                    <ul class="list-logos-login">
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo2.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo3.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo4.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo5.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo6.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo7.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo8.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo9.png') }}" alt="Image"></div>
                        </li>
                        <li>
                            <div class="item-logo"><img src="{{ asset('assets-login/imgs/page/homepage3/logo1.png') }}" alt="Image"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script-auth')
@endsection
