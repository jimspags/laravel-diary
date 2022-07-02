@extends('master')
@section('title', 'Home')
@section('content')
<h1>Hello, {{ auth()->user()->name}}</h1>
<form action="{{ route('diary.logout') }}" method="POST">
    @csrf
    <input type="submit" value="Logout" class="btn btn-danger">
</form>
@endsection