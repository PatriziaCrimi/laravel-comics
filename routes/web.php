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

// ---------------------------- Homepage Route ----------------------------

Route::get('/', function () {
  // Storing in a variable the array of comics contained in the file "comics.php" in "config" folder
  $comics_list = config('comics');
  // Associative array to be able to use the variables in ".blade.php" files
  $data = [
    'comics_list' => $comics_list,
  ];
  return view('home', $data);
})->name('homepage');

// -------------------------- Single Comic Route --------------------------

Route::get('/comic/{id}', function($id) {
  // Storing in a variable the array of comics contained in the file "comics.php" in "config" folder
  $comics_list = config('comics');
  // Checking that $ID is a valid value: if it is NOT included in my array "$comics_list" an error 404 is thrown
  if(!array_key_exists($id, $comics_list)) {
    abort(404);
  }
  // Storing in a variable the single comic (product) that I need to print its details in the web page
  $comic = $comics_list[$id];
  // Associative array to be able to use the variables in ".blade.php" files
  $data = [
    'comic' => $comic,
  ];
  return view('comic', $data);
})->name('single_comic');

// ------------------------- Navbar Menu Links Routes -------------------------

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

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
