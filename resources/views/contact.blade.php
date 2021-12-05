@extends('layouts.main')

@section('container')
<div class="container">
  <main>
 

    <div class="row justify-content-md-center">
      <div class="col-md-7 col-lg-8">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
          {{ session('success') }}
        </div>
            
        @endif
        <h4 class="mb-3 text-center">Contac Us</h4>
        <form method="POST" action="/inbox" class="mb-5" >
          @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control @error('first') is-invalid @enderror"  id="firstName" placeholder="" name="first" value="{{ old('first') }}" required>
              @error('first')
              <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text"  class="form-control  @error('last') is-invalid @enderror" id="lastName" placeholder=""  name="last" value="{{old('last') }}" required>
              @error('last')
              <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="you@example.com"  name="email" value="{{old('email') }}" >
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Pesan</label>
              <textarea class="form-control  @error('pesan') is-invalid @enderror" id="exampleFormControlTextarea1"  name="pesan" value="{{old('pesan') }}" rows="3"></textarea>
              @error('pesan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
            </div>

            <div class="row justify-content-md-center mt-3">
              <button class=" btn btn-warning btn-md" type="submit" style="width: 40%">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
    @endsection