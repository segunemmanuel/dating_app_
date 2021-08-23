<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutpageController;
use App\Models\User;
// use Illuminate\Support\Facades\DB;

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




Route::get('/about',[AboutpageController::class,'about'])->name('about');

Route::get('/profiles',[AboutpageController::class,'profile'])->name('profiles');


Route::get('/single_profile',[AboutpageController::class,'single_profile'])->name('single_profile');

Route::get('/',[AboutpageController::class,'home'])->name('/');
Route::get('dash',[AboutpageController::class,'admin_dash'])->name('dash');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
