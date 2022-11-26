<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookControler;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/publisher', function () {
//     return view('publisher');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/publisher', [PublisherController::class, 'getAllPublishers'])->name('publisher');

// Route::get('/book-detail', function () {
//     return view('book-detail');
// });

Route::get('/book-detail-{id}', [BookControler::class,'BookDetail'])->name('book-detail');

Route::get('/category-{id}', [BookCategoryController::class,'GetBookByCategory'])->name('book-category');

Route::get('/category', [BookCategoryController::class,'GetAllCategory'])->name('category');

Route::get('/publisher-detail-{id}', [PublisherController::class,'getPublisherBooks'])->name('publisher-detail');
