<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UsuarioCreadoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/export-excel', [PostController::class, 'exportExcel']);

Route::middleware(['web', 'auth'])->group(function() {
    Route::impersonate();
    Route::get('/usuario', 'UsuarioCreadoController@index')->name('usuario.index');
});



Route::get('/', function () {
    return view('welcome');
});

// Route::resource('usuario', 'App\Http\Controllers\UsuarioCreadoController');

Route::resource('usuario', UsuarioCreadoController::class);


Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);
