<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('home' ,[
        "title" => "Home",
        "active" =>'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "name" => "samuel",
        "email" => "samuel@mail.com",
        "image" => "gambar1.jpg",
        "title" => "About"
    ]);
});
Route::get('/about', function () {
    return view('About', [
        "name" => "samuel",
        "email" => "samuel@mail.com",
        "active" =>'about',
        "image" => "gambar1.jpg",
        "title" => "About"
    ]);
});
Route::get('/blog',[PostController::class, 'index']);

Route::get('posts/{post:slug}',[PostController::class,'show']);


Route::get('/categories/',function()
{
    return view('categories',
    [
        'title' => "Post Categories",
        "active" =>'Categories',
        'categories'=>Category::all()
    ]);
});
// Route::get('/authors/{author}',[PostController::class,'sortbyauthor']);
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/posts',[PostController::class,'show']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
//simpan data -> post
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
