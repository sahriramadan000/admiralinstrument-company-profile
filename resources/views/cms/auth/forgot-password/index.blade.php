@extends('auth.layouts.app')

@section('content-auth')
<section class="section-box box-content-login">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="box-form-register">
                    <h3 class="title-register">Reset to your password</h3>
                    <p class="text-md neutral-700">Masukkan email Anda and a reset link will sent to you, let's access our the best recommendation for you.</p>
                    <form class="form-register w-100 mt-4 pt-2 form-data">
                        <div class="form-group">
                            <label>Your Email<span class="brand-1">*</span></label>
                            <input type="email" name="email" class="form-control" id="input-email" placeholder="Enter Email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-black btn-rounded">
                                Reset Now
                            </button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted text-center">
                        <span> Remember Password?</span>
                        <a href="{{ route('login') }}" class="fw-bold"> login</a>
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
    {{-- UPDATE  --}}
    <script>
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

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form-data');

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous validation messages
                const errorElements = document.querySelectorAll('.error-msg');
                errorElements.forEach(function(element) {
                    element.remove();
                });

                const email = document.querySelector('input[name="email"]').value.trim();
                let isValid = true;

                if (!email) {
                    showError('Email tidak boleh kosong', 'input[name="email"]');
                    isValid = false;
                }


                if (isValid) {
                    const formData = new FormData(form);

                    $.ajax({
                        url: '{{ route('forgot-password-send-email') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: response.msg,
                                    showConfirmButton: false,
                                    // timer: 1500
                                });
                                // window.location.href = '{{ route('dashboard') }}';
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: response.msg,
                                    // timer: 1500
                                });
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
