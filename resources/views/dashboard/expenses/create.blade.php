@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <h2>Section title</h2>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <div class="row my-3">
            <div class="col">
                <label for="" class="label-control">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="" class="label-control">Amout</label>
                <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount"
                    value="{{ old('amount') }}">
                @error('amount')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <label for="" class="label-control">Description</label>
        <textarea type="date" class="form-control @error('description') is-invalid @enderror"
            name="description">{{ old('description') }}</textarea>
        @error('description')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror

        <div class="row my-3">
            <div class="col">
                <label for="" class="label-control">Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                    value="{{ old('date') }}">
                @error('date')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="" class="label-control">Category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    value="{{ old('category') }}">
                @error('category')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</main>

@stop