
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Posts Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-3 fs-4" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection

{{--  
$post->title = 'Judul Pertama'
$post->slug = 'judul-pertama'
$post->excerpt = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.'
$post->body = 'Minus provident consequuntur quo velit dolore officiis reiciendis odio culpa autem ullam impedit vitae nulla, ut enim at quia. Similique, sunt cumque.'
$post->save() --}}
