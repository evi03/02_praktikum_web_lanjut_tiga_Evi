<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

//No 1
    Route::get('/', function() {
        echo "Menampilkan Halaman Home";
    });



//No 2
    Route::prefix('category')->group(function () {
        Route::get('/marbel-edu-games', function () {
        return "Menampilkan halaman Marbel Edu Games";
    });
        Route::get('/marbel-and-friends-kids-games', function () {
        return "Menampilkan halaman Marbel and Friends Kids Games";
    });
        Route::get('/riri-story-books', function () {
        return "Menampilkan halaman Riri Story Books";
    });
        Route::get('/kolak-kids-songs', function () {
        return "Menampilkan halaman Kolak Kids Songs";
    });
});

//No 3 
    Route::get('/news/{title?}', function ($title = null) {
        return $title;
    });

//No 4

    Route::prefix('/program')->group (function () {
        Route::get('/karir', function () {
        return "Menampilkan halaman program karir";
    });
    Route::get('/magang', function () {
        return "Menampilkan halaman program magang";
    });
    Route::get('/kunjungan-industri', function () {
        return "Menampilkan halaman program kunjungan industri";
    });
});

//No 5
    Route::get('/about', function () {
        return ('Menampilkan halaman About Us');
});

//No 6
    Route::resource('contact', PageController::class)->only([
    'index'
]);