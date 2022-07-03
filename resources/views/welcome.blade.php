@extends('master')
@section('title', 'Welcome')

@section('content')
<div class="container-fluid" style="height: 100vh;">
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand"><h4 class="text-primary" style="font-weight: bold;">Diary</h4></a>
      <div class="d-flex">
          <a href="{{ route('login.index') }}" class="btn btn-primary" style="border-radius: 20px; margin-right: 5px; font-weight: bold;">Login</a>
          <a href="{{ route('register.index') }}" class="btn btn-primary" style="border-radius: 20px; font-weight: bold;">Register</a>
      </div>
    </div>
  </nav>
  <div class="row justify-content-center">
    <div class="col-8 p-5">
      <h1 class="text-primary text-center">Bring your memories with Diary in Cyberspace</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <a href="{{ route('login.index') }}" class="btn btn-primary" style="font-weight: bold; padding: 10px 20px;">Let's get started!</a>
      </div>
    </div>

  </div>
</div>

<script>

</script>
@endsection