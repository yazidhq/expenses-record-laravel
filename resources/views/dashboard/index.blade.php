@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-12 px-md-4 mt-3">
  <h1>Welcome, {{ Str::ucfirst(auth()->user()->name) }}</h1>
</main>

@stop