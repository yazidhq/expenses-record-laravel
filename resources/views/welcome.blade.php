@extends('layouts.template')

@section('content')

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <span>Expenco</span>
        </a>
        <nav id="navbar" class="navbar">
            <i class="mobile-nav-toggle"></i>
        </nav>
    </div>
</header>

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">We provide a daily expense tracking service for you.</h1>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="{{ route('login') }}"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="welcome/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

@stop