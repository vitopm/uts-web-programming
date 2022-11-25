<?php

use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/publisher', function () {
    return view('publisher');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [HomeController::class, 'contact']);