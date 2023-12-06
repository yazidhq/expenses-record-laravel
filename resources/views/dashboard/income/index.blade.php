@extends('dashboard.layouts.template')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
    <h2>Section title</h2>
    <a href="{{ route('income.create') }}" class="btn btn-dark my-3">Add New</a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($income as $row)
                <tr>
                    <td>{{ $row->title }}</td>
                    <td>Rp. {{ number_format((float)$row->amount, 0, ',', '.') }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->date }}</td>
                    <td>
                        <div class="d-md-flex">
                            <a href="{{ route('income.edit', $row->slug) }}" class="btn btn-sm btn-warning"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('income.destroy', $row->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</main>

@stop