<?php

use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\SatisfactionController;
use App\Http\Controllers\DashboardCategory;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardSurveyController;
use App\Http\Controllers\DashboardTamuController;
use App\Http\Controllers\SkmController;
use App\Http\Controllers\StatistikTamuController;
use App\Http\Controllers\StatistikSKMController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\User;
use App\Http\Controllers\DependentDropdownController;
use Illuminate\Support\Facades\DB;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/skm', [SkmController::class, 'index']);
Route::get('/buku-tamu', [BukuTamuController::class, 'index']);
Route::get('/remove', [BukuTamuController::class, 'remove']);
Route::get('/kepuasan', [SatisfactionController::class, 'index']);
Route::get('/list/buku-tamu', [BukuTamuController::class, 'list']);
Route::resource('/kunjungan', BukuTamuController::class);
Route::resource('/simpan_survey', SkmController::class);
Route::post('/form/isi-survey', [BukuTamuController::class, 'isi_survey'])->name('isiSurvey');
//get SUb Jenis Layanan
Route::post('/data/subJenisLayanan', [BukuTamuController::class, 'subJenisLayanan'])->name('subJenisLayanan.post');
Route::post('/data/subJenisLayananskm', [SkmController::class, 'subJenisLayananskm'])->name('subJenisLayananskm.post');
//dengan model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //slug untuk identifkasi id kalau defaultnya id

//daftar category
// Route::get('/categories', function () {
// 	return view('categories', [
// 		'title' => 'Post Categories',
// 		"active" => "Categories",
// 		'categories' => Category::all()
// 	]);
// });

//Statistik
Route::get('/statistik/buku-tamu', [StatistikTamuController::class, 'index']);
Route::get('/statistik/skm', [StatistikSKMController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/dashboard/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// User
Route::post('/user/update', [User::class, 'update']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/skm', [DashboardController::class, 'skm'])->middleware('auth');

Route::get('/data/jenis-kelamin/', [DashboardController::class, 'get_jenis_kelamin'])->name('data.jk');
Route::get('/data/jenis-kelamin/skm', [DashboardController::class, 'get_jenis_kelamin_skm']);
Route::get('/data/kepuasan/skm', [DashboardController::class, 'get_kepuasan_skm']);
Route::get('/data/pendidikan', [DashboardController::class, 'get_data_pendidikan'])->name('data.pendidikan');
Route::get('/data/pendidikan/skm', [DashboardController::class, 'get_data_pendidikan_skm'])->name('data.pendidikan.skm');
Route::get('/data/kunjungan', [DashboardController::class, 'get_data_kunjungan'])->name('data.kunjungan');
Route::get('/data/kunjungan/layanan', [DashboardController::class, 'get_data_kunjungan_layanan'])->name('data.kunjungan.layanan');
Route::get('/data/kunjungan/mingguan', [DashboardController::class, 'get_data_kunjungan_mingguan'])->name('data.kunjungan.mingguan');
Route::get('/data/kunjungan/bulanan', [DashboardController::class, 'get_data_kunjungan_bulanan'])->name('data.kunjungan.bulanan');
Route::get('/data/kunjungan/skm', [DashboardController::class, 'get_data_kunjungan_skm'])->name('data.kunjungan.skm');
Route::get('/data/survey/layanan', [DashboardController::class, 'get_survey_unsur_pelayanan'])->name('data.survey.layanan');
Route::get('/data/kunjungan/mingguan/skm', [DashboardController::class, 'get_data_kunjungan_mingguan_skm']);
Route::get('/data/kunjungan/bulanan/skm', [DashboardController::class, 'get_data_kunjungan_bulanan_skm']);
Route::get('/data/kunjungan/layanan/skm', [DashboardController::class, 'get_data_kunjungan_layanan_skm']);
Route::get('/data/hasil/triwulan', [DashboardController::class, 'get_hasil_triwulan']);
Route::get('/home', function () {
	return redirect('/dashboard');
});

// Route::get('/statistik', function () {
// 	return view('statistik.index');
// })->middleware('guest');

Route::GET('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::GET('/dashboard/categories/checkSlug', [DashboardCategory::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategory::class)->middleware('admin');
Route::resource('/dashboard/profile', User::class)->middleware('auth');
Route::resource('/dashboard/bukutamu', DashboardTamuController::class)->middleware('auth');
Route::post('/bukutamu/update', [DashboardTamuController::class, 'updateTamu'])->middleware('auth');
Route::resource('/dashboard/surveytamu', DashboardSurveyController::class)->middleware('auth');
Route::resource('/inbox', InboxController::class);

// Laporan
Route::post('/dashboard/kunjungan/export_excel', [DashboardTamuController::class, 'export_excel']);
Route::post('/dashboard/survey/export_excel', [DashboardSurveyController::class, 'export_excel']);
// Kebutuhan untuk Alamat
Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', [DependentDropdownController::class, 'cities'])->name('cities');
Route::get('districts', [DependentDropdownController::class, 'districts'])->name('districts');
Route::get('villages', [DependentDropdownController::class, 'villages'])->name('villages');


//Kepuasan
Route::resource('/addPoint', SatisfactionController::class);

