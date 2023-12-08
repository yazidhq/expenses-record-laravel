@extends('layouts.template')

@section('content')

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span>Expenco</span>
        </a>
        <nav id="navbar" class="navbar">
            <i class="mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <p class="mb-3">Register</p>
            <h2>Create account</h2>
        </header>
        <div class="row gy-4">
            <div class="col-lg-12">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="row gy-4">
                        <input type="hidden" name="role" value="user">
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Password Confirmation">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">REGISTER</button>
                        </div>
                        <a href="{{ route('login') }}">Login to your account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection