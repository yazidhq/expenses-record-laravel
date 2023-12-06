@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <h2">{{ auth()->user()->name}}'s Profile</h2>

        <hr>

        <section>
            <div class="h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                        class="rounded-circle img-fluid" style="width: 100px;" />
                                </div>
                                <h4 class="mb-2" data-aos="fade-up" data-aos-offset="500">{{ auth()->user()->name}}
                                </h4>
                                <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="100">{{
                                    auth()->user()->email}}</p>
                                <button type="button" class="btn btn-outline-secondary">
                                    Edit Profile
                                </button>
                                <div class="d-flex justify-content-between text-center mt-5 mb-2">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <p class="mb-2 h5">Rp. {{number_format((float)$income->sum('amount'), 0, ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Monthly Income</p>
                                    </div>
                                    <div class="px-3" data-aos="fade-up" data-aos-delay="150">
                                        <p class="mb-2 h5">Rp. {{ number_format((float)$expenses->sum('amount'), 0, ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Monthly Expenses</p>
                                    </div>
                                    <div data-aos="fade-up" data-aos-delay="200">
                                        <p class="mb-2 h5">Rp. {{ number_format((float)$todayExpenses->sum('amount'), 0,
                                            ',',
                                            '.')
                                            }}</p>
                                        <p class="text-muted mb-0">Today Expenses</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

</main>

@stop