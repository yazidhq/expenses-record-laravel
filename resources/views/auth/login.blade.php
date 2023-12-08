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
            <p class="mb-3">Log In</p>
            <h2>Login to your account</h2>
        </header>
        <div class="row gy-4">
            <div class="col-lg-12">
                <form action="{{ route('authenticate') }}" method="POST">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                placeholder="Password" name="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                        <a href="{{ route('register') }}">Create account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection