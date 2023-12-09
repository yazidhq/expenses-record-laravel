@extends('admin.layouts.template')

@section('admin')

<h1 class="mt-3 text-center">Welcome to {{ Str::ucfirst(auth()->user()->name) }} page</h1>

@stop