<?php
//use App\Http\Controllers\Controller\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');



Route::Post('login', [App\Http\Controllers\Auth\LoginController::class, 'store']);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');


Route::get('Register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('Register');
Route::Post('Register', [App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('Darshboard', [App\Http\Controllers\Auth\DarshboardController::class, 'index'])
->name('Darshboard')
->middleware('auth');
/*
stage(1)
Initial learning state my post app
*/

Route::get('/posts', [App\Http\Controllers\Auth\PostController::class, 'index'])->name('posts');//->middleware('auth');
Route::get('/posts/{Post}', [App\Http\Controllers\Auth\PostController::class, 'show'])->middleware('auth')->name('posts.show');
Route::Post('/posts', [App\Http\Controllers\Auth\PostController::class, 'store'])->middleware('auth');//only Authorised user can post
Route::delete('/posts/{Post}', [App\Http\Controllers\Auth\PostController::class, 'destroy'])->name('posts.destroy');
/*ROUTE-MODEL /posts/{Post} binding performed here below.
the model is directly injected in the route*/
Route::post('/posts/{Post}/likes', [App\Http\Controllers\Auth\PostLikeController::class, 'store'])->name('posts.likes');
 Route::delete('/posts/{Post}/likes', [App\Http\Controllers\Auth\PostLikeController::class, 'destroy']);

 //user and her posts and details
 Route::get('users/{user}/posts',[App\Http\Controllers\UserPostController::class, 'index'])->name('users.posts');

