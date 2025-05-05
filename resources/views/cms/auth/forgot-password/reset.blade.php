@extends('auth.layouts.app')

@section('content-auth')
<section class="section-box box-content-login">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="box-form-register">
                    <h3 class="title-register">Reset</h3>
                    <p class="text-md neutral-700">Enter your new password to reset your account and regain your access.</p>
                    <form class="form-register w-100 mt-4 pt-2 form-data">
                        <div class="form-group">
                            <label>Password<span class="brand-1">*</span></label>
                            <input type="password" class="form-control" name="password" id="password-input" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password<span class="brand-1">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation"id="password-confirmation-input" placeholder="Enter Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-black btn-rounded">
                                Reset Password
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form-data');
            const urlParams = new URLSearchParams(window.location.search);
            const expiresAt = parseInt(urlParams.get('expires_at'), 10);

            function isExpired() {
                return (Date.now() / 1000) > expiresAt; // Bandingkan waktu saat ini dengan waktu kadaluwarsa
            }

            if (isExpired()) {
                alertFailed('Session expired, please request a new password reset.');
                // Disable form elements or redirect as needed
                form.querySelectorAll('input, button').forEach(el => el.disabled = true);
                return;
            }

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const password = document.querySelector('input[name="password"]').value.trim();
                const passwordConfirmation = document.querySelector('input[name="password_confirmation"]')
                    .value.trim();

                if (password !== passwordConfirmation) {
                    alertFailed('Password dan konfirmasi password tidak cocok.');
                    return;
                }

                const formData = new FormData(form);
                formData.append('token', urlParams.get('token'));
                formData.append('email', urlParams.get('email'));

                $.ajax({
                    url: '{{ route('forgot-password-proses-reset-password') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            alertSuccess(response.msg);
                            // Redirect to login or another page
                            window.location.href = '{{ route('forgot-password-success-reset') }}';
                        } else {
                            alertFailed(response.msg);
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

                function showError(message, selector) {
                    const element = document.querySelector(selector);
                    const error = document.createElement('span');
                    error.className = 'error-msg text-danger';
                    error.textContent = message;
                    element.parentNode.appendChild(error);
                }
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
        });
    </script>
@endsection
