@extends('master')
@section('title', 'Register')
@section('content')
<div class="row justify-content-center align-items-center bg-primary bg-opacity-25" style="height: 100vh;">
    <div class="col-4 border border-primary bg-primary bg-opacity-50 p-2">
        <a href="{{ route('welcome') }}" class=""><img src="" alt="Diary Logo"></a>
        <h4>Register</h4>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                <small class="text-danger">@error('name') {{$message}} @enderror</small>
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                <small class="text-danger">@error('email') {{ $message }} @enderror</small>
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                <small class="text-danger">@error('password') {{ $message }} @enderror</small>
            </div>
            <div class="mb-1">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form><br>
        <a href="{{ route('login.index') }}">Already have an account?</a>
    </div>
</div>
@endsection