@extends('layouts.authLayout')

@section('login')
<div class="card bg-white bg-opacity-50 my-5 py-4 mx-auto login-card">
  <div class="card-body d-flex flex-column align-items-center">
    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="logo" style="height: 6rem">
    <h4>e-Support</h4>
    <form action="{{ route('validate') }}" method="POST" class="mt-3">
      @csrf

      @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center" role="alert">
          <p class="mb-0">{{ $message }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if ($message = Session::get('for-approval'))
        <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-center" role="alert">
          <p class="mb-0">{{ $message }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="row mb-3">
        <label for="username" class="">Emali or Username</label>
        <div class="col-md-12">
          <input type="text" id="username" class="form-control @error('Username') is-invalid @enderror" name="Username" value="{{ old('Username') }}" autocomplete="username" autofocus>

          @error('Username')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      <div class="row mb-4">
        <label for="password" class="">Password</label>
        <div class="col-md-12">
          <input type="password" id="password" class="form-control @error('Password') is-invalid @enderror" name="Password" autocomplete="current-password">

          @error('Password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="d-flex flex-column align-items-center">
          <button type="submit" class="btn btn-warning rounded-pill w-50 mb-3">Login</button>
        </div>
      </div>
    </form>
    <a href="#" class="text-decoration-none text-color my-3">Forgot Password?</a>
    <div class="d-flex justify-content-between w-75 mt-3">
      <p class="text-color" data-bs-toggle="modal" data-bs-target="#registerModal">
        Sign up as resident
      </p>
      {{-- <a href="{{ route('toRegister') }}" class="text-decoration-none text-color">Create an Account</a> --}}
      <!-- Button trigger modal -->
      <p class="text-color" data-bs-toggle="modal" data-bs-target="#companyModal">
        Sign up as company
      </p>
    </div>
  </div>
</div>
@endsection