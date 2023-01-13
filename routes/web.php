<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TwilioLive;



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


Route::get('/',[HomeController::class,'index']);

///////////////////////////// login & register //////////////////////////////////
Route::get('login',[AuthenticationController::class,'index'])->name('login');
Route::get('register',[AuthenticationController::class,'registerPage'])->name('register');
Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');

Route::post('loginProc',[AuthenticationController::class,'login'])->name('loginProc');
Route::post('registerProc',[AuthenticationController::class,'register'])->name('registerProc');

Route::get('twilio',[TwilioLive::class,'index'])->name('twilio');
Route::get('fetch-room',[TwilioLive::class,'fetchRoom'])->name('fetch-room');
Route::get('vedio-call',[TwilioLive::class,'vedioCall'])->name('vedio-call');
Route::get('send-message',[TwilioLive::class,'sendMessage'])->name('send-message');
Route::get('make-call',[TwilioLive::class,'makeCall'])->name('make-call');
Route::get('make-vedio-call',[TwilioLive::class,'makeVedioCall'])->name('make-vedio-call');
Route::get('room-unique-name',[TwilioLive::class,'fetchRoom'])->name('room-unique-name');
Route::get('connect-to-room',[TwilioLive::class,'connectToRoom'])->name('connect-to-room');




