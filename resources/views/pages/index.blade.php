    @extends('layouts.app')

    @section('content')
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light meow">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">only Cats</h1>
          <p class="lead fw-normal">Sign up and share your favorite cat photos</p>
          <a class="btn btn-outline-dark btn-light" href="/register">Register</a>
          <a class="btn btn-outline-dark btn-light" href="/login">Login</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
      </div>
    @endsection