@extends('layouts.detail')
  
@section('container')


<div class="container">
  
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p>By <a href="/posts?authors={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{$post->category->name }} </a></p>
            <h5>{{ $post->autho }}</h5>

            @if ($post->image)

              <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}"class="img-fluid ">
              </div>
              
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->tag ? $post->tag : $post->category->name }}" alt="{{ $post->tag ? $post->tag : $post->category->name }}"class="img-fluid ">
              @endif
            <article class="my-3 fs-6">
            <p>{!! $post->body!!}</p>
            </article>
            <a href="/posts" class="d-block mt-3">Kembali</a>  
        </div>
    </div>
</div>
@endsection
