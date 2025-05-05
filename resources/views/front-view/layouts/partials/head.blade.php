<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admiral Instrument</title>
<meta name="author" content="AdmiralInstrumentTeam">
<meta name="description" content="Admiral Instrument">
<meta name="keywords" content="Admiral Instrument">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicons - Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo-admiral-no-text.png') }}">

<!--==============================
    Google Fonts
============================== -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">


<!--==============================
    All CSS File
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css')}}">
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('assets-front/css/fontawesome.min.css')}}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets-front/css/magnific-popup.min.css')}}">
<!-- Swiper css -->
<link rel="stylesheet" href="{{ asset('assets-front/css/swiper-bundle.min.css')}}">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets-front/css/style.css')}}">

<style>
    .main-img {
        width: 100% !important;
        height: 350px !important;
        object-fit: contain !important;
        object-position: center !important;
        border-radius: 20px !important;
        background-color: #f8f8f8 !important;
    }

    .main-img-product {
        width: 100% !important;
        height: 220px !important;
        object-fit: contain !important;
        object-position: center !important;
        border-radius: 20px !important;
        background-color: #f8f8f8 !important;
    }

    .thumb-img {
        width: 70px !important;
        height: 70px !important;
        object-fit: cover;
        border-radius: 6px;
        border: 2px solid transparent;
        cursor: pointer;
        transition: border-color 0.3s ease;
        background-color: #f8f8f8;
    }

    .thumb-img:hover,
    .thumb-img.active {
        border-color: #ff4d4f;
    }
</style>
