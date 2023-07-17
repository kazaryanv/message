<?php

use App\Http\Controllers\LinkGenerateController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/show', function () {
//    return view('show');
//});
Route::get('/',[LinkGenerateController::class,'index'])->name('SmsLinks');
Route::get('/create',[LinkGenerateController::class,'create'])->name('create');
Route::get('/show/',[LinkGenerateController::class,'show_link'])->name('show_link');
Route::get('/delete/{id}',[LinkGenerateController::class,'destroy'])->name('destroy');

//Route::get('/login',[LinkGenerateController::class,'login'])->name('login');
//Route::post('/login/store',[LinkGenerateController::class,'login_store'])->name('login_store');
//Route::get('/show/message/{id}',[LinkGenerateController::class,'show_message'])->middleware('auth')->name('show_massage');

Route::get('/show/message/link_name/{link_name}', [LinkGenerateController::class, 'link_name'])->name('link_name');
Route::get('/show/message/{id}', [LinkGenerateController::class, 'show_message'])->name('show_massage');

