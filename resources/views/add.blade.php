@extends('layout')
@section('content')
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('img/favicons/bootstrap-logo.svg') }}" alt="" width="72"
            height="57">
        <h2>Add Restaurant</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
            group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>
    <div class="row g-5">
        <div class="col-md-6 col-lg-6 order-md-last">
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="col-md-6 col-lg-6">
            <h4 class="mb-3">Restaurant Information</h4>
            <form class="needs-validation" novalidate method="POST" action="{{ route('resto.add') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St"
                            value="{{ old('address') }}" required>
                        @error('address')
                            <div class="text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Add the restaurant</button>
            </form>
        </div>
    </div>


@endsection
