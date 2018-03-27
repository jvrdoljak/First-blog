@extends('main')

@section('content')

 <!-- RGISTER FORM -->
  <div class="row">
    <div align="center" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <h1>Register here!</h1>
      
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Repeat password" aria-label="Repeat password" aria-describedby="basic-addon1">
      </div>
      
      <div align="center" class="input-group mb-3">
      <a href="#" class="btn btn-secondary btn-block btn-md">Register</a>
      </div>
    </div>
  </div>
</div>

@endsection