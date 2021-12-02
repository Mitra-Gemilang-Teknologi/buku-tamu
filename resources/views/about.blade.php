@extends('layouts.main')

@section('container')
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('assets/images/favicon.png') }}" alt="" 
    width="72" height="57">
    <h1 class="display-5 fw-bold">About Us</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Kami adalah Web portal dan blog tentang berita terbaru serta tips & trick  yang dapat membantu anda mendapatkan informasi yang bermanfaat.</p>
      {{-- <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-warning btn-sm px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-sm px-4">Secondary</button>
      </div> --}}
    </div>
  </div>
    @endsection