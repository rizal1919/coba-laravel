<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home', [
    	"title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    	"title" => "About",
    	"name" =>  "Rizal Fathurrahman",
    	"email" => "hirizal@student.ittelkom-sby.ac.id"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);


Route::get('blog/{post:slug}', [PostController::class, 'show']);
// kalau kalian nulis post saja, maka dia akan mengirimkan id saja secara default.
// tapi kalau ditambahin :slug, maka slug lah yang akan dikueri