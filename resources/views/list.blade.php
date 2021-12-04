@extends('layout')
@section('content')
    <h2>Restaurant list</h2>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ session('error') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant->id }}</td>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->email }}</td>
                        <td>{{ $restaurant->address }}</td>
                        <td>
                            <a class="text-danger" href="/delete/{{ $restaurant->id }}" title="Delete Resto"><i
                                    class="fa fa-trash"></i></a>
                            &nbsp;|&nbsp;
                            <a class="text-success" href="/edit/{{ $restaurant->id }}" title="Edit Resto"><i
                                    class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span>{{ $restaurants->links() }}</span>
    @endsection
