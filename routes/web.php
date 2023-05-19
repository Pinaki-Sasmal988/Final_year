<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BloodController;
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
Route::get('/adminLogout', function () {
    Session()->forget('admin');
    return view('index');
});
Route::get('/logout', function () {
    Session()->forget('user');
    return view('index');
});
Route::get('/Logout', function () {
    Session()->forget('value');
    return view('index');
});
Route::view('/BankRegister','BankRegister');
Route::view('/Dashboard','Dashboard');
 Route::view('/showorder','showorder');
Route::view('/userLogin','userLogin');
Route::view('/search','search');
Route::view('/bankShow','bankShow');
Route::view('/admin','admin');
Route::view('/userRegistration','userRegistration');
Route::view('/Bloodstock','Bloodstock');
Route::view('/bankLogin','bankLogin');
Route::view('/viewDetails','viewDetails');
Route::view('/afterSearch','afterSearch');
Route::view('/booknow','booknow');
Route::view('/adminLogin','adminLogin');

Route::get('/admin',[BankController::class,'fetch']);
Route::get('/bloodstock',[BloodController::class,'bloodStock']);
Route::get('/viewDetails{id}',[BloodController::class,'viewDetails']);
Route::get('/booknow{id}',[BloodController::class,'booknow']);
Route::get('/showorder',[BloodController::class,'showOrder']);


Route::POST('/blood_details',[BloodController::class,'bloodDetails']);
Route::POST('/search',[BankController::class,'search']);
Route::post('/login',[UserController::class,'login']);
Route::post('/bankLogin',[BankController::class,'bankLogin']);
Route::post('/BankRegister',[BankController::class,'store']);
Route::post('/verify',[BankController::class,'insert']);
Route::get('/cancel{id}',[BankController::class,'cancel']);

Route::post('/UserRegister',[UserController::class,'register']);
// Route::post('/order',[UserController::class,'order']);
Route::post('/adminLogin',[UserController::class,'adminLogin']);
Route::post('/stockUpdate',[BloodController::class,'stockUpdate']);

// Route::get('/random',[UserController::class,'random']);