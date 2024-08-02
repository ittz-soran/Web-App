<?php

use App\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',Welcome::class)->name('/');
