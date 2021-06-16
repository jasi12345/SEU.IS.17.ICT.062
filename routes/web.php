<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;

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
Route::view('index','index');
Route::post('adduser',[DetailsController::class,'adddata']);
Route::get('fetch',[DetailsController::class,'getdata']);
Route::get('delete/{name}',[DetailsController::class,'delete']);
Route::get('edit/{name}',[DetailsController::class,'edit']);