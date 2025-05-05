@extends('cms.layouts.app')

@section('style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="mb-2">
                <h1>{{ $page_title }}</h1>
                <div class="text-zero top-right-button-container">
                    <a href="{{ route('cms.users.index') }}"
                        class="btn btn-lg btn-danger top-right-button top-right-button-single mr-2">
                        Back
                    </a>
                    <button type="button"
                        class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ACTIONS
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('cms.users.edit', $user) }}">Change</a>
                        @if (Auth::user()->id != $user->id)
                            <a href="#" class="dropdown-item" onclick="if(confirm('Do you want to delete this user?')) { event.preventDefault(); document.getElementById('delete-user-{{ $user->id }}').submit(); }">Remove</a>
                            <form id="delete-user-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="post" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        @endif
                    </div>
                </div>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">{{ $page_title }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $sub_title }}</li>
                    </ol>
                </nav>
            </div>

            <div class="row" style="margin-top:15vh;">
                <div class="col-12">
                    <a href="{{ $user->avatar ? asset('assets/img/profile_picture/'. $user->avatar) : asset('assets/images/avatar/1.png') }}" class="lightbox">
                        <img alt="Profile" src="{{ $user->avatar ? asset('assets/img/profile_picture/'. $user->avatar) : asset('assets/images/avatar/1.png') }}"
                            class="img-thumbnail card-img social-profile-img shadow-sm">
                    </a>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="text-center pt-4 mb-3">
                                <h3 class="pt-2 text-uppercase font-weight-bold">{{ $user->name }}</h3>
                            </div>
                            <p class="mb-3">
                                I’m a web developer. I spend my whole day, practically every day,
                                experimenting with HTML, CSS, and JavaScript; dabbling with Python and
                                Ruby; and inhaling a wide variety of potentially useless information
                                through a few hundred RSS feeds. I build websites that delight and
                                inform. I do it well.
                            </p>

                            <p class="text-muted text-small mb-2">Email</p>
                            <p class="mb-3">{{ $user->email }}</p>

                            <p class="text-muted text-small mb-2">Username</p>
                            <p class="mb-3">{{ $user->username }}</p>

                            <p class="text-muted text-small mb-2">Position</p>
                            <p class="mb-3">
                                <span class="badge badge-pill badge-outline-theme-2 mb-1">{{ $user->roles->pluck('name')->join(', ') }}</span>
                            </p>
                            <p class="text-muted text-small mb-2">Contact</p>
                            <div class="social-icons">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="simple-icon-social-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="simple-icon-social-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="simple-icon-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    User Information
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->name }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Roles:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            @forelse ($user->getRoleNames() as $role)
                                <span class="badge bg-primary">{{ $role }}</span>
                            @empty
                            @endforelse
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@section('script')

@endsection
