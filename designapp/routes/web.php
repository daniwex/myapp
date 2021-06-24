<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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

Route::get('home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('trousers', [pagesController::class, 'trousers'])->name('trousers')->middleware(['auth']);;
// Route::view('home', 'home');
require __DIR__.'/auth.php';
