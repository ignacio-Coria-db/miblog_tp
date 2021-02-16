<?php

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

//principal
Route::get('/about',  [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/index',  [App\Http\Controllers\PagesController::class, 'index']);

//posts
//con esta linea genero todas las acciones del controlador
Route::resource('posts', 'App\Http\Controllers\PostsController');
//ruta login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
