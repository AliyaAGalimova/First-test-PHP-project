<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;

Route::resource('api/v1name/books', BooksController::class);
Route::resource('authors', AuthorsController::class);
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
    return view('list_books');
});

Route::get('/crud_authors', function () {
    return view('crud_authors');
});

Route::get('/crud_books', function () {
    return view('crud_books');
});


