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
Route::view('login','login');
Route::view('users','users');
Route::post('users', [pagesController::class, 'index']);
// Route::get('welcome',[pagesController::class, 'checkaccess']);
Route::get('db',[pagesController::class, 'fetchdata']);
// Route::any('/home',[pagesController::class, 'getHome']);
Route::view('/usedition','USedition');
Route::view('/signup','signup');
Route::view('/home','home');
Route::post('/signup',[pagesController::class, 'saveTodatabase']);

//  Route::get('/Usedition', function (){
//      return view('USedition');
//  });
// Route::get('/users/{najme}/{age}', function($name,$aged){
//     return view('users',['userj' => $name, 'ag' => $aged ]);
// });