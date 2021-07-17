<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PagesController;

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

Route::get('/contact',[PagesController::class, 'contact']);

Route::get('/services',[PagesController::class, 'services']);

Route::get('/about',[PagesController::class, 'about']);

Route::get('/team',[PagesController::class, 'team']);

Route::get('/blogs',[PagesController::class, 'blog']);

Route::get('/admin',[PagesController::class, 'admin']);


