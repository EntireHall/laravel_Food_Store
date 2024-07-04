<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\MailController;
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

Route::get('/', [WebController::class,'index'])->name('home');
Route::get('/about-us', [WebController::class,'about'])->name('about');
Route::get('/menu', [WebController::class,'menu'])->name('menu');
Route::get('/gallery', [WebController::class,'gallery'])->name('gallery');

Route::match(['GET','POST'],'/reservation', [WebController::class,'reservation'])->name('reservation');

Route::match(['GET','POST'],'/contact-us', [WebController::class,'contact'])->name('contact');


