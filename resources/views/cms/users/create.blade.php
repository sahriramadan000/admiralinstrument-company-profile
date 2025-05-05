@extends('cms.layouts.app')


@push('style_link')

@endpush

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <form action="{{ route('cms.users.store') }}" class="row needs-validation" method="post" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="col-12">
                <div class="card mb-2 br-15">
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div class="d-flex justify-content-start align-items-center gap-3">
                            <div class="">
                                <a href="{{ route('cms.users.index') }}" class="btn shadow-lg fs-20 d-flex align-items-center justify-content-center text-dark rounded-3" style="width: 45px !important; height:45px !important; border: 1px solid #eeeeee;">
                                    <iconify-icon icon="solar:arrow-left-broken"></iconify-icon>
                                </a>
                            </div>
                            <div class="">
                                <p class="text-muted mb-0">Kembali ke Daftar</p>
                                <h3 class="mb-0 fw-bold text-capitalize">{{ $sub_title }}</h3>
                            </div>
                        </div>
                        <div class="text-zero top-right-button-container">
                            <button type="submit" class="btn btn-md btn-light-brand btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-2">
                <div class="card border-top-0 br-15">
                    <div class="card-body personal-info">
                        <div class="mb-3">
                            <h5 class="card-title mb-1 anchor" id="basic">
                                Gambar Produk
                            </h5>
                            <p class="text-muted">Unggah gambar berkualitas tinggi untuk meningkatkan identifikasi dan kredibilitas.</p>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <input class="filepond" type="file" name="avatar" accept="image/*">

                                @if ($errors->has('avatar'))
                                    <span class="text-danger">{{ $errors->first('avatar') }}</span>
                                @endif
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 mt-2">
                <div class="card border-top-0" style="border-radius: 15px;">
                    <div class="card-body personal-info">
                        <h5 class="card-title mb-1 anchor" id="basic">
                            Informasi Umum
                        </h5>
                        <p class="text-muted">Masukkan detail Anda untuk mengatur akun Anda. Pastikan informasi yang diberikan akurat untuk kelancaran proses pendaftaran.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">NIP</label>
                                    <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="fullnipInput" placeholder="Masukkan nip Anda" value="{{ old('nip') }}" required>

                                    @if ($errors->has('nip'))
                                        <span class="text-danger">{{ $errors->first('nip') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">Nama</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="fullnameInput" placeholder="Masukkan nama Anda" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">Nama Pengguna</label>
                                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="usernameInput" placeholder="Masukkan nama pengguna Anda" value="{{ old('username') }}">

                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="mailInput" placeholder="Masukkan email Anda" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">Kata Sandi</label>
                                    <div class="input-group field">
                                        <input type="password" name="password" class="form-control password @error('password') is-invalid @enderror" id="newPassword" placeholder="Masukkan kata sandi Anda">
                                        <div class="input-group-text border-start bg-gray-2 c-pointer show-pass"><iconify-icon icon="solar:eye-broken"></iconify-icon></div>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label fw-semibold">Peran</label>
                                    <select name="roles" class="form-control" data-choices data-width="100%" id="roleSelect">
                                        <option value="#!" selected disabled>Pilih Peran</option>
                                        @forelse ($roles as $role)
                                        <option value="{{ $role }}" {{ in_array($role, (array) old('roles', [])) ? 'selected' : '' }}>
                                            {{ $role }}
                                        </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        const inputPasswordField = document.querySelector("input.password");
        const showPasswordBtn = document.querySelector(".show-pass");

        showPasswordBtn.addEventListener("click", () => {
            if (inputPasswordField.getAttribute("type") === "password") {
                inputPasswordField.setAttribute("type", "text");
                showPasswordBtn.innerHTML = '<iconify-icon icon="solar:eye-closed-bold"></iconify-icon>';
            } else {
                inputPasswordField.setAttribute("type", "password");
                showPasswordBtn.innerHTML = '<iconify-icon icon="solar:eye-broken"></iconify-icon>';
            }
        });

        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateType);

        const fileInput = document.querySelector('.filepond');
        FilePond.create(fileInput, {
            allowMultiple: false,
            maxFiles: 1,
            acceptedFileTypes: ['image/*'],
            imagePreviewHeight: 150,
            allowImagePreview: true,
            storeAsFile: true,
        });
    });
</script>
@endpush
