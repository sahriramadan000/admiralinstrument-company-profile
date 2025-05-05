@extends('cms.auth.layouts.app')

@section('content-auth')
<section class="section-box box-content-login">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="box-form-register">
                    <h3 class="title-register">Selamat datang kembali</h3>
                    <p class="text-md neutral-700">Admin handal, waktunya menyusun informasi dan menjaga sistem tetap prima bersama CMS Admiral!</p>
                    <form class="form-register w-100 mt-4 pt-2 form-data" method="POST" action="{{ route('cms.login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email / Nama Pengguna<span class="brand-1">*</span></label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="input-username" placeholder="Masukan Email atau Nama Pengguna" name="username" value="{{ old('username') }}" autocomplete="username" autofocus required>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi <span class="brand-1">*</span></label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Kata Sandi" autocomplete="current-password" id="password-input" value="" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group-cb">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="text-md">
                                    <input class="cb-agree" type="checkbox">Remember me
                                </label>
                                <a class="text-md neutral-500" href="{{ route('forgot-password-view') }}">Forgot password?</a>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-black btn-rounded">
                                Masuk
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewbox="0 0 23 8" fill="none">
                                    <path d="M22.5 4.00032L18.9791 0.479492V3.3074H0.5V4.69333H18.9791V7.52129L22.5 4.00032Z" fill=""></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box-image-banner-login">
                    <img src="{{ asset('assets-login/imgs/page/login/banner.png') }}" alt="Image">
                    {{-- <ul class="list-logos-login">
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
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script-auth')
{{-- UPDATE  --}}
    <script>
         $(document).ajaxStart(function() {
            showLoading('Processing Request.....');
        }).ajaxStop(function() {
            // hideLoading();
        });
        function alertSuccess(msg) {
            Swal.fire({
                position: "center",
                icon: "success",
                title: msg,
                showConfirmButton: false,
                timer: 1500
            });
        }

        function alertFailed(msg) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: msg,
                timer: 1500
            });
        }

        function showLoading(message) {
            Swal.fire({
                title: message,
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }

        function hideLoading() {
            Swal.close();
        }


        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form-data');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous validation messages
                const errorElements = document.querySelectorAll('.error-msg');
                errorElements.forEach(function(element) {
                    element.remove();
                });

                const email = document.querySelector('input[name="username"]').value.trim();
                const password = document.querySelector('input[name="password"]').value.trim();
                let isValid = true;

                if (!email) {
                    showError('Username tidak boleh kosong', 'input[name="username"]');
                    isValid = false;
                }

                if (!password) {
                    showError('Password tidak boleh kosong', 'input[name="password"]');
                    isValid = false;
                }


                if (isValid) {
                    const formData = new FormData(form);

                    $.ajax({
                        url: '{{ route('cms.send-login') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: response.msg,
                                    showConfirmButton: false,
                                });
                                window.location.href = '{{ route('cms.dashboard') }}';
                                console.log('fail => ' +response);

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: response.msg,
                                });
                                console.log('fail => ' +response);
                            }
                        },
                        error: function(xhr) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    showError(errors[key][0], `[name="${key}"]`);
                                }
                            }
                        }
                    });
                }
            });

            function showError(message, selector) {
                const element = document.querySelector(selector);
                const error = document.createElement('span');
                error.className = 'error-msg text-danger';
                error.textContent = message;
                element.parentNode.appendChild(error);
            }
        });
    </script>
@endsection
