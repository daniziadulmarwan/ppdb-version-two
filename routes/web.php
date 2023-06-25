<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/admin/dashboard', 'admin.dashboard.index');
Route::view('/admin/student', 'admin.student.index');
Route::view('/admin/document', 'admin.document.index');
Route::view('/admin/contact', 'admin.contact.index');