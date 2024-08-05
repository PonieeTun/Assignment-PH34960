@extends('layouts.client.main')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row mb-4">
            <form action="{{ route('register') }}" method="post">
                @csrf

                <label for="name" class="mt-4">Name</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="email" class="mt-4">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="password" class="mt-4">Password</label>
                <input type="password" name="password" id="password" class="form-control">

                <label for="password_confirmation" class="mt-4">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

                <div class="form-check d-flex mt-3">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                        aria-describedby="registerCheckHelpText" />
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Register</button>
            </form>
        </div>
    </div>
@endsection
