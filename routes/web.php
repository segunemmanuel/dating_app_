<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\PostsController;

use App\Models\User;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dash', function () {
    return view('dash');
});


Route::get('/view_all_users', function () {

$users=User::all();

    return view('view_all_users',compact('users'));
});


Route::get('/add_new_posts', function () {
    return view('add_new_posts');
});



// Route::post('/create',[PostsController::class,'insert_posts'])->name('create');
Route::post('/view_all_users',[AboutpageController::class,'view_all_users'])->name('view_all_users');



// General Links
Route::get('/about',[AboutpageController::class,'about'])->name('about');
Route::get('/profiles',[AboutpageController::class,'profile'])->name('profiles');
Route::get('/single_profile',[AboutpageController::class,'single_profile'])->name('single_profile');
Route::get('/',[AboutpageController::class,'home'])->name('/');
Route::get('dash',[AboutpageController::class,'admin_dash'])->name('dash');




// Inserting posts
Route::post('/add_new_posts',[PostsController::class,'insert_posts'])->name('add_new_posts');



// View all posts admin view
Route::get('/view_all_posts',[PostsController::class,'view_all_posts'])->name('view_all_posts');

// Blog page

Route::get('/blog',[AboutpageController::class,'blog'])->name('sees_blog');




// Single blog posts

Route::get('/single_blog',[AboutpageController::class,'Single_blog']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
