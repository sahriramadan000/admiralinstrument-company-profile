@extends('layouts.app')

@section('style')

@endsection

@section('content')
<div class="nxl-content">
    <div class="main-content">
        <div class="col-12">
            <div class="card mb-2 br-15">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center p-3 gap-3">
                    <div class="">
                        <h3 class="mb-0 fw-bold text-capitalize">{{ $page_title }}</h3>
                        <p class="text-muted mb-0">{{ $sub_title }}</p>
                    </div>
                    <ul class="nav nav-pills nav-justified p-1 rounded-3">
                        <li class="nav-item">
                            <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                <span class="">Pengguna</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#appearance" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="">Tampilan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mb-2 br-15">
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane show active" id="profile">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/profile_picture/' . (Auth::user()->avatar ?? 'default.png')) }}" alt="image" class="img-fluid img-thumbnail mb-3" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;" />
                        </div>

                        <div class="container">
                            <hr>
                            <div class="row align-items-center px-3">
                                <div class="col-lg-4">
                                    <h5 class="mb-1">NIP</h5>
                                    <small class="text-muted">Nomor Identifikasi Karyawan </small>
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="text-end mb-0">{{ Auth::user()->nip }}</>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center px-3">
                                <div class="col-lg-4">
                                    <h5 class="mb-1">Nama</h5>
                                    <small class="text-muted">Identitas Pengguna dalam Sistem </small>
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="text-end mb-0">{{ Auth::user()->name }}</>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center px-3">
                                <div class="col-lg-4">
                                    <h5 class="mb-1">Nama Pengguna</h5>
                                    <small class="text-muted">Nama Unik untuk Identifikasi Akun </small>
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="text-end mb-0">{{ Auth::user()->username }}</>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center px-3">
                                <div class="col-lg-4">
                                    <h5 class="mb-1">Email</h5>
                                    <small class="text-muted">Alamat Elektronik untuk Komunikasi dan Verifikasi </small>
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="text-end mb-0">{{ Auth::user()->email }}</>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center px-3">
                                <div class="col-lg-4">
                                    <h5 class="mb-1">Peran</h5>
                                    <small class="text-muted">Izin dan Tanggung Jawab Pengguna dalam Sistem </small>
                                </div>
                                <div class="col-lg-8">
                                    <h5 class="text-end mb-0">{{ Auth::user()->getRoleNames()[0] }}</>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-end mt-3">
                                <a href="{{ route('edit-user-profile') }}" class="btn btn-warning">Edit Pengguna</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="appearance">
                        <div class="container mt-4 mb-5">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="mb-0 fw-bold">Theme Mode</h4>
                                    <small class="text-muted">Sesuaikan tampilan keseluruhan dengan mode terang atau gelap untuk pengalaman visual yang nyaman.</small>
                                </div>
                            </div>
                            <hr>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Light Mode</h5>
                                        <small class="text-muted">Tingkatkan visibilitas dengan antarmuka yang cerah dan bersih.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Dark Mode</h5>
                                        <small class="text-muted">Kurangi ketegangan mata dengan antarmuka yang ramping dan minim cahaya.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mb-5">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="mb-0 fw-bold">Top Navigation Bar Style</h4>
                                    <small class="text-muted">Ubah warna navigasi atas agar sesuai dengan preferensi tampilan Anda.</small>
                                </div>
                            </div>
                            <hr>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Light</h5>
                                        <small class="text-muted">Atur navigasi atas yang cerah untuk tampilan yang bersih dan modern.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Dark</h5>
                                        <small class="text-muted">Gunakan navigasi atas berwarna gelap untuk penampilan yang ramping dan profesional.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mb-5">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="mb-0 fw-bold">Menu Background Style</h4>
                                    <small class="text-muted">Customize the main menu background color to enhance readability and aesthetics.</small>
                                </div>
                            </div>
                            <hr>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Light</h5>
                                        <small class="text-muted">Apply a light background for a bright and clean menu appearance.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Dark</h5>
                                        <small class="text-muted">Choose a dark background for a bold and modern menu design.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mb-4">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h4 class="mb-0 fw-bold">Sidebar Display Options</h4>
                                    <small class="text-muted">Konfigurasikan ukuran dan tampilan sisi untuk pengalaman navigasi yang lebih fleksibel.</small>
                                </div>
                            </div>
                            <hr>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Default</h5>
                                        <small class="text-muted">Gunakan tata letak sisi standar untuk fungsionalitas dan visibilitas penuh.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-default" value="default">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Condensed</h5>
                                        <small class="text-muted">Meminimalkan lebar sisi sekaligus menjaga agar ikon tetap terlihat untuk tata letak yang ringkas.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small" value="condensed">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Hidden</h5>
                                        <small class="text-muted">Menyembunyikan samping sepenuhnya untuk ruang kerja yang bebas gangguan.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden" value="hidden">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Small Hover Active</h5>
                                        <small class="text-muted">Pertahankan sisi yang sempit yang melebar saat dilayangkan untuk akses cepat.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover-active" value="sm-hover-active">
                                    </div>
                                </div>
                            </div>

                            <div class="card bg-transparent rounded-4 p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="mb-1">Small Hover</h5>
                                        <small class="text-muted">Samping ringkas yang tetap diperkecil, tetapi sedikit melebar saat digeser.</small>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover" value="sm-hover">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mb-3">
                            <p class="text-muted">
                                Untuk mengembalikan pengaturan tata letak ke kondisi default, klik tombol
                                <a href="#" id="reset-layout" class="text-danger fw-bold">Atur Ulang ke Default</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>

</script>
@endpush
