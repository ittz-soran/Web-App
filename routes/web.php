<?php

use App\Controllers\PointIndex;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',PointIndex::class)->name('/');

