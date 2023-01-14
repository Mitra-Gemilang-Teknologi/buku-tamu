@extends('layouts.main')

<style>
	.nav-link{
		color:blueviolet !important;
	}
	.submit{
		background-color: blueviolet !important;
		color: #ffffff !important;
	}
</style>
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

      @if (session()->has('success'))


      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session()->has('loginError'))

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center"> Login</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="floatingInput">Email address</label>
                @error('email')

                <div class="invalide-feedback">
                  {{ $message }}
                </div>

                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"required>
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg submit" type="submit">Login</button>
            </form>
            {{-- <small class="d-block text-center mt-3">Not registered?<a href="/register">Register Now!</a></small> --}}
          </main>
    </div>
</div>


@endsection
