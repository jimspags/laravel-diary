@extends('master')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center align-items-center bg-primary bg-opacity-25" style="height: 100vh;">
    <div class="col-4 border border-primary bg-primary bg-opacity-50 p-2">
        <a href="{{ route('welcome') }}" class=""><img src="" alt="Diary Logo"></a>
        <h4>Login</h4>
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="email" class="form-label">Email address</label>
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