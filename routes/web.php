<?php

use App\Http\Controllers\contactcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba.home', ['title' => 'Home']);
});

Route::get('/coba/bio', function () {
    return view('coba.biodata', ['title' => 'Profile']);
});

Route::get('/coba/profile', function () {
    return view('coba.about', ['title' => 'About']);
});

Route::get('/coba/contact', function () {
    return view('coba.contact', ['title' => 'Contact']);
});

Route::get('/index', function () {
    return view('template.index');
});

Route::get('template/contact', [contactcontroller::class, 'index']);
Route::post('template/contact', [contactcontroller::class, 'store']);