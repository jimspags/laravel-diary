@extends('master')
@section('title', 'Register')
@section('content')
<div class="row justify-content-center align-items-center bg-primary bg-opacity-25" style="height: 100vh;">
    <div class="col-4 border border-primary bg-primary bg-opacity-50 p-5">
        <a href="" class=""><img src="" alt="Diary Logo"></a>
        <h4>Register</h4>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form><br>
        <a href="">Already have an account?</a>
    </div>
</div>
@endsection