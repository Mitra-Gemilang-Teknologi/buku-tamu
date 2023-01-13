<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\DashboardCategory;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\SkmController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InboxController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BukuTamuController::class, 'index']);

Route::get('/about', function () {
	return view('about', [
		"title" => "About",
		"active" => "About"
	]);
});


Route::get('/contact', function () {
	return view('contact', [
		"title" => "Contact",
		"active" => "Contact",

	]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('/skm', [SkmController::class, 'index']);
Route::get('/buku-tamu', [BukuTamuController::class, 'index']);
//Halaman single post

//dengan model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //slug untuk identifkasi id kalau defaultnya id

//daftar category
Route::get('/categories', function () {
	return view('categories', [
		'title' => 'Post Categories',
		"active" => "Categories",
		'categories' => Category::all()
	]);
});

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Dashboard
Route::get('/dashboard', function () {
	return view('dashboard.index');
})->middleware('auth');


Route::GET('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::GET('/dashboard/categories/checkSlug', [DashboardCategory::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategory::class)->middleware('admin');
Route::resource('/inbox', InboxController::class);
