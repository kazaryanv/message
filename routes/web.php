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

Route::get('/create',[LinkGenerateController::class,'create'])->name('create');
Route::get('/',[LinkGenerateController::class,'index'])->name('SmsLinks');
Route::get('/show',[LinkGenerateController::class,'show'])->name('show_id');
Route::get('/delete/{id}',[LinkGenerateController::class,'destroy'])->name('destroy');