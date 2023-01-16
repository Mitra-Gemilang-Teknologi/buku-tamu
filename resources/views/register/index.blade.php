@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Please  Register</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text"  class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="name"required>
                    <label for="Name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="name" placeholder="username"required  value="{{ old('username') }}">
                    <label for="Username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"  value="{{ old('email') }}" id="Email" placeholder="name@example.com"required>
                    <label for="Email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            
            </form>

            <small class="d-block text-center mt-3">all ready registered?<a href="/login">Login!</a></small>
        </main>
    </div>
</div>


@endsection