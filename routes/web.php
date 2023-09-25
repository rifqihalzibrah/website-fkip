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

// Profil
Route::get('/profil/sejarah', function () {
    return view('/profil/sejarah/index');
});

// Akademik
Route::get('/', function () {
    return view('index');
});

Route::get('/akademik/dekan', function () {
    return view('/akademik/dekan/index');
});

Route::get('/akademik/kaprodi', function () {
    return view('/akademik/kaprodi/index');
});


// News
Route::get('/news', function () {
    return view('/news/index');
});

Route::get('/news/rilis-12-juni-2023', function () {
    return view('/news/rilis-12-juni-2023/index');
});

Route::get('/news/rilis-7-april-2023', function () {
    return view('/news/rilis-7-april-2023/index');
});

Route::get('/news/rilis-19-januari-2022', function () {
    return view('/news/rilis-19-januari-2022/index');
});

// Jurnal
Route::get('/jurnal', function () {
    return view('/jurnal/index');
});
