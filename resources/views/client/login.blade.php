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
            <form action="{{ route('login') }}" method="post">
                @csrf
        
        
        
                <label for="email" class="mt-4">Email</label>
                <input type="email" name="email" id="email" class="form-control">
        
                <label for="password" class="mt-4">Password</label>
                <input type="password" name="password" id="password" class="form-control">

                <div class="row mt-4 mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                      </div>
                    </div>
            
                    <div class="col-md-6 d-flex justify-content-center">
                      <!-- Simple link -->
                      <a href="#!">Forgot password?</a>
                    </div>
                  </div>
        
        
                <button type="submit" class="btn btn-primary mt-4">Login</button>
            </form>
        </div>
    </div>
@endsection
