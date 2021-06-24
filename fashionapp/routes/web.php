<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Databasech;

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
Route::get('/db',[Databasech::class, 'db']);
Route::view('/','welcome');
Route::get('/shop/{req}',[Databasech::class,'salespage']);
