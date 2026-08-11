<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BasicController;

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

Route::get('/', [BasicController::class, 'index'])->name('home');

Route::get('/about', [BasicController::class, 'about'])->name('about');

Route::get('/contact', [BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');