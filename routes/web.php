<?php

use App\Http\Controllers\PostControler;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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
    return view('Home', [
        "title" => "home",
        "active" => "home"
    ]);
});

Route::get('/About', function(){
    return view('About', [
        "title" => "About",
        "active" => "about",
        "name" => "wahyu andriono",
        "email" => "wahyuandriono@gmail.com",
        "image" => "Capture.JPG"
    ]);
});
//halaman posts
Route::get('/blog', [PostControler::class,'index']);

//halalaman single post
Route::get('/posts/{post:slug}', [PostControler::class,'show']);

//halaman categories
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Categories",
        'active' => 'categories',
        'posts' => $category->posts->load('category','user'),
    ]);
});

Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('posts',[
        'title' => "Posts by Author : $user->name",
        'active' => 'categories',
        'posts' => $user->posts->load('category','user'),
    ]);
});

// controler menampilkan view login
Route::get('/login',[LoginController::class,'index']);

// controler authentication login
Route::post('/login',[LoginController::class,'authenticate']);

// controler menampilkan view register
Route::get('/register',[RegisterController::class,'index']);

//controler verification register
Route::post('/register',[RegisterController::class,'store']);

// 