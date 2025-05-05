<!-- Title Meta -->
<meta charset="utf-8" />
<title>CMS | {{ $page_title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=""/>
<meta name="author" content="Secret Team" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('logo-admiral-no-text.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo-admiral-no-text.png') }}">

<!-- Gridjs Plugin css -->
<link href="{{ asset('assets/vendor/gridjs/theme/mermaid.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Vendor css (Require in all Page) -->
<link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Icons css (Require in all Page) -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css (Require in all Page) -->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Theme Config js (Require in all Page) -->
<script src="{{ asset('assets/js/config.min.js') }}"></script>

<link href="{{ asset('assets/vendor/filepond-4.32.7/filepond.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendor/filepond-4.32.7/filepond-plugin-image-preview.css') }}" rel="stylesheet">
@stack('style_link')

@stack('styles')
<style>
    .gridjs-table {
        border-collapse: collapse;
        width: 100%;
        border: 0 !important;
    }
    .gridjs-td {
        border: 0 !important;
        border-bottom: 1px solid #ddd !important;
        padding-top: 18px !important;
        padding-bottom: 18px !important;
        padding-right: 13px !important;
        padding-left: 13px !important;
    }
    .gridjs-th {
        border: 0 !important;
        padding: 13px !important;
    }
    .gridjs-tr:hover {
        background-color: rgba(var(--bs-light-rgb), .75) !important;
        transition: background-color 0.3s ease-in-out;
    }
    .gridjs-wrapper {
        border:0;
    }
    .gridjs-footer {
        padding-left: 20px;
        padding-right: 20px;
    }
    .gridjs-head {
        padding-left: 20px;
        padding-right: 20px;
    }

    .br-15 {
        border-radius: 15px !important;
    }
    .br-top-15 {
        border-radius: 15px 15px 0 0;
    }
    .swal2-container.swal2-center>.swal2-popup {
        border-radius: 30px;
    }
    .filepond--credits {
        display: none !important;
    }
    .filepond {
        height: 10rem;
        border-radius: 10px;
        border: 1px dashed #d6d6d6;
    }
    .filepond--root .filepond--drop-label {
        min-height: 10em;
    }
    .filepond--image-preview-wrapper {
        min-height: 8.8em;
    }
    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        border-radius: 5px;
        background-color: #1e2329;
    }
    .form-control:read-only {
        background-color: #f3f3f5 !important;
        opacity: 1;
    }
</style>
