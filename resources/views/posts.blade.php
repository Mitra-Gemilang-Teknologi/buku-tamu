
@extends('layouts/main')


@section('container')


<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))

      <input type="hidden" name="category" value="{{request('category')}}">
          
      @endif
      @if (request('author'))

      <input type="hidden" name="author" value="{{request('author')}}">
          
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari.."name="search"value="{{ request('search') }}">
        <button class="btn btn-warning"  type="submit" id="button-addon2">Cari</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
   <div class="card mb-3">
    @if ($posts[0]->image)

    <div style="max-height:350px; overflow:hidden">
      <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"class="img-fluid ">
    </div>
    @else
 
         <img src="https://source.unsplash.com/1200x400?{{$posts[0]->tag ? $posts[0]->tag : $posts[0]->category->name }}" class="card-img-top rounded-3 " alt="{{ $posts[0]->tag ? $posts[0]->tag : $posts[0]->category->name }}">
   
    @endif
    
    <div class="card-body text-center">
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"><h3 class="card-title">{{ $posts[0]->title }}</h3></a> 
      <p><small class="text-muted">By <a href="/posts?author={{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{$posts[0]->category->name }} </a>{{ $posts[0]->created_at->diffForHumans() }}</small></p>
      
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-warning">Lanjut Baca..</a>
    </div>
   </div>

   <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute px-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">
                {{ $post->category->name }}</a>
              </div> 
              {{-- Posstion absolut untuk muncul ke paling atas --}}

              @if ($post->image)

              <div style="max-height:350px; overflow:hidden">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}"class="img-fluid">
              </div>
              
              @else
              <img src="https://source.unsplash.com/500x400?{{ $post->tag ? $post->tag : $post->category->name }}" class="card-img-top rounded-3" alt="{{$post->tag ? $post->tag : $post->category->name }}">
              @endif
               
                <div class="card-body">
                  <h5 class="card-title text-decoration-none"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title}} </a></h5>
                  <p><small class="text-muted">By <a href="/posts?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Lanjut Baca..</a>
                </div>
              </div>         
          </div>
          @endforeach 
      </div>
   </div>
  @else
  <p class="text-center fs-4">Halaman Tidak di Temukan</p>
  @endif
  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
  @include('partials.footer')
@endsection
