@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <h2>Section title</h2>
    <form action="{{ route('category.store') }}" class="my-3" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Add category.."
                    value="{{ old('name') }}" name="name">
                @error('name')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Description of category.." value="{{ old('description') }}" name="description">
                @error('description')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </form>
    <hr>

    @foreach ($categories as $category)
    <div class="d-inline-block">
        <form action="" method="POST">
            @method('DELETE')
            {{-- create pop-up for detail and delete button --}}
            <button class="btn btn-outline-secondary">
                {{ $category->name }}
            </button>
        </form>
    </div>
    @endforeach

</main>

@stop