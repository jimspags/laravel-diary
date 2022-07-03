@extends('master')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-4 border rounded border-primary bg-light bg-opacity-50 p-5">
        <a href="{{ route('welcome') }}" style="text-decoration: none;"><h3 class="text-center">DIARY</h3></a>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                <small class="text-danger">@error('email'){{$message}}@enderror</small>
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                <small class="text-danger">@error('password'){{$message}}@enderror</small>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form><br>
        <a href="{{ route('register.index') }}">Don't have an account yet?</a>

    </div>
</div>
@endsection