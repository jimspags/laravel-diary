@extends('master')
@section('title', 'Login')
@section('content')
<div class="row justify-content-center align-items-center bg-primary bg-opacity-25" style="height: 100vh;">
    <div class="col-4 border border-primary bg-primary bg-opacity-50 p-2">
        <a href="{{ route('welcome') }}" class=""><img src="" alt="Diary Logo"></a>
        <h4>Login</h4>
        <form>
            <div class="mb-1">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-1">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form><br>
        <a href="{{ route('register.index') }}">Don't have an account yet?</a>

    </div>
</div>
@endsection