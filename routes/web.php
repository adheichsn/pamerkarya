<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardProfileController;
use Facade\FlareClient\View;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "About"
    ]);
});

route::get('/product', [PostController::class, 'index']);

route::get('product/{post:slug}', [PostController::class, 'show']);

route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "post by category : $category->name",
        "active" => "categories",
        'posts' => $category->post->load('user', 'category')

    ]);
});

route::get('/authors/{user:username}', function (User $user) {

    return view('posts', [
        'title' => "posts by author : $user->name ",
        'active' => 'posts',
        'posts' => $user->post->load('user', 'category')
    ]);
});

route::get('/categories', function () {

    return view('categories', [
        'title' => 'Post Category',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

//Login - Logout
route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

//Register
route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/profile', [DashboardProfileController::class, 'show'])->name('profile.show');
    Route::get('/dashboard/profile/edit', [DashboardProfileController::class, 'edit'])->name('profile.edit'); // Add this line
    Route::put('/dashboard/profile/update', [DashboardProfileController::class, 'update'])->name('profile.update');
});

//Dashboard
route::get('/dashboard', function () {

    return view('dashboard.index');
})->middleware('auth');

route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/generate', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});

// Route::post('/comments', 'CommentController@store')->name('comments.store');

// routes/web.php

Route::middleware('auth')->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
});

// routes/web.php
Route::middleware('auth')->group(function () {
    // Route::post('/post/{id}/like', 'LikeController@toggleLike')->name('post.like');
    Route::post('/post/like/{id}', [LikeController::class, 'like'])->name('post.like');
    // Route::post('/post/{id}/like', [LikeController::class, 'toggleLike'])->name('post.like');
});

// routes/web.php
// Route::get('/post/{id}', 'PostViewController@show')->name('post.show');
// Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

