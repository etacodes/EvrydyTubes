<?php

use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        'active' => 'home'
    ]);
});
Route::get('/reviews', [ReviewController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store']);
Route::get('/reviews/{post:slug}', [ReviewController::class, 'show'])->name('reviews.slug');

Route::get('/brand', function () {
    return view('brand', [
        "title" => "Brand",
        'active' => 'Brand',
        'categories' => Category::all()
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'About',
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [
    DashboardPostController::class, 'checkSlug'
])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
