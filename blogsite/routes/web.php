<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('home');
});
Route::view('/home','home');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/publish', function () {
    return view('publish');
})->middleware(['auth'])->name('publish');
require __DIR__.'/auth.php';
Route::post('publish/myposts',[PagesController::class,'posts']);
Route::get('publish/myposts',[PagesController::class,'myposts'])->middleware(['auth'])->name('myposts');;
 Route::get('/dashboard',[PagesController::class,'showEntries'])->middleware(['auth'])->name('dashboard');
 Route::get('publish/updateposts',[PagesController::class,'updateordelete'])->middleware('auth');
 Route::get('publish/updateposts/delete/{id}',[PagesController::class,'Deletepost'])->middleware('auth');
