<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\UserController;

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
Route::get('/logout', function () {
    Session()->forget('user');
    return redirect('userLogin');
});
Route::view('/register','BankRegister');
Route::view('/Dash','Dashboard');
Route::view('/order','order');
Route::view('/userLogin','userLogin');
Route::view('/search','search');
Route::view('/show','show');
Route::view('/admin','admin');
Route::view('/user','userRegistration');

Route::get('/admin',[BankController::class,'fetch']);

Route::POST('/search',[BankController::class,'search']);
Route::post('/login',[UserController::class,'login']);

Route::post('/BankRegister',[BankController::class,'store']);
Route::post('/verify',[BankController::class,'insert']);
Route::post('/UserRegister',[UserController::class,'register']);
// Route::get('/random',[UserController::class,'random']);