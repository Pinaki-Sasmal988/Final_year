<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
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
Route::view('/register','BankRegister');
Route::view('/search','search');
Route::view('/show','show');
Route::view('/admin','admin');
Route::POST('/search',[BankController::class,'search']);
Route::get('/admin',[BankController::class,'fetch']);
Route::post('/BankRegister',[BankController::class,'store']);
Route::post('/verify',[BankController::class,'insert']);