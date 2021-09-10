<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category= Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author= User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts',[
            "title" => "All Post". $title,
            "active" => "posts",
            "posts" => Post::latest()->Filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){ //menggunak model data binding
        
        return view('post',[
            "title"=>"Single Post",
            "active" => "posts",
            "post" => $post // sama dengan Post::find($post)
        ]);
    }   
}
