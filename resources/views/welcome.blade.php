@extends('master')
@section('title', 'Welcome')
@section('content')
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Diary</a>
    <div class="d-flex">
        <a href="" class="btn btn-primary">Login</a>
        <a href="" class="btn btn-primary">Register</a>
    </div>
  </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/welcome/ONE.jpg') }}" class="d-block w-100" alt="ONE" style="height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/welcome/TWO.jpg') }}" class="d-block w-100" alt="TWO" style="height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/welcome/THREE.jpg') }}" class="d-block w-100" alt="THREE" style="height: 500px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


@endsection