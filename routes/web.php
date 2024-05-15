<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP Method:
 * 1. Get   : Untuk menampilkan
 * 2. Post  : Untuk mengirim data
 * 3. Put   : Untuk meng-update data
 * 4. delete: untuk menghapus data
 */

//Route untuk menampilkan teks salam 
Route::get('/salam', function(){
    return "Assalamualaikum...";
});

Route::get('/profile', function () {
    return view('profile');
});
