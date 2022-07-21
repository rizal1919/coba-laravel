<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('home', [
    	"title" => "Home",
        'active' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
    	"title" => "About",
    	"name" =>  "Rizal Fathurrahman",
        'active' => 'About',
        "location" => "Gresik, Indonesia",
    	"email" => "hirizal@student.ittelkom-sby.ac.id"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);


Route::get('blog/{post:slug}', [PostController::class, 'show']);
// kalau kalian nulis post saja, maka dia akan mengirimkan id saja secara default.
// tapi kalau ditambahin :slug, maka slug lah yang akan dikueri
Route::get('categories/', function() {
    return view('categories', [
        'title' => 'Categories Posts',
        'active' => 'Category',
        'categories' => Category::all()
    ]);
});

// Route::get('categories/{category:slug}', function(Category $category){

//     return view('blog', [

//         'title' => "Post By Category : $category->name",
//         'active' => 'Category',
//         'posts' => $category->posts->load('category','user')
//         // $category->posts itu ngambil dari Model Category yang ada hasMany nya zal. jadi dia masukin method posts nya.
//         // kenapa dia bisa ngambil? ya karna relational database nya sudah terhubung di Post.php model tadi yang ada belongsTo nya zal
//         // public function category(){
//         //     return $this->belongsTo(Category::class);
//         // }
//     ]);

// });

// Route::get('authors/{user:username}', function(User $user) {

//     return view('blog', [
//         'title' => "Post By Author : $user->name",
//         'active' => 'Category',
//         'posts' => $user->posts->load('category','user')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);