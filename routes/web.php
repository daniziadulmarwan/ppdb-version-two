<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/admin/dashboard', 'admin.dashboard.index');