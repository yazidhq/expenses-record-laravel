@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <h2 class="text-center mt-3">Expenses Categories</h2>
    <form action="{{ route('category.store') }}" class="my-3" method="POST">
        @csrf
        <div class="row">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Category Name" aria-label="Category Name" value="{{ old('name') }}" name="name">
                <input type="text" class="form-control" placeholder="Description" aria-label="Description" value="{{ old('description') }}" name="description">
            </div>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            @error('description')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-dark btn-sm">Submit</button>
            </div>
        </div>
    </form>
    <hr>

    @foreach ($categories as $category)
    <div class="d-inline-block">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
            data-bs-target="#categoryModal{{ $category->id }}">
            {{ $category->name }}
        </button>
        <!-- Modal -->
        <div class="modal fade" id="categoryModal{{ $category->id }}" tabindex="-1" aria-labelledby="categoryModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">{{ $category->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Description: {{ $category->description }}</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('category.destroy', $category->slug) }}" method="POST"
                            class="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</main>

@stop