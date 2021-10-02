<?php

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

Route::get('/', function () {
    return view('welcome');
});
// sukuriama grupe keliu kurie susije su autoriais
Route::prefix('authors')->group(function () {
    Route::get ('', 'AuthorController@index')->name('author.index');
    // atsakingas uz sukurima
    Route::get ('create', 'AuthorController@create')->name('author.create');
    // store- atsakinga uz irasyma i DB
    Route::post ('store', 'AuthorController@store')->name('author.store');
});

Route::prefix('books')->group(function () {
    Route::get ('', 'BooksController@index')->name('book.index');
    Route::get ('create', 'BooksController@create')->name('book.create');
    Route::post ('store', 'BooksController@store')->name('book.store');
});


