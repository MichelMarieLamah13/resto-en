@extends('layout')
@section('content')
    <h2>Section title</h2>
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
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span>{{ $restaurants->links() }}</span>
    @endsection
