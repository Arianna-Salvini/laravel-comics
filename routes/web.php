<?php

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
    $db_comics = config('comics-db.comics');
    return view('comics', compact('db_comics'));
})->name('home');

Route::get('/characters', function () {

    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $db_comics = config('comics-db.comics');
    // dd($comics);
    return view('comics', compact('db_comics'));
})->name('comics');

// Single page connected to page comics 
Route::get('/single_page_comic/{id}', function ($id) {
    abort_unless($id >= 0 && $id < count(config('comics-db.comics')), 404);
    $comic = config('comics-db.comics')[$id];
     ($comic['thumb']);
    return view('single_comic.single_page_comic', compact('comic'));
})->name('single_page_comic');


Route::get('/movies', function () {

    return view('movies');
})->name('movies');


Route::get('/tv', function () {

    return view('tv');
})->name('tv');


Route::get('/games', function () {

    return view('games');
})->name('games');


Route::get('/collectibles', function () {

    return view('collectibles');
})->name('collectibles');


Route::get('/videos', function () {

    return view('videos');
})->name('videos');


Route::get('/fans', function () {

    return view('fans');
})->name('fans');


Route::get('/news', function () {

    return view('news');
})->name('news');


Route::get('/shop', function () {

    return view('shop');
})->name('shop');
