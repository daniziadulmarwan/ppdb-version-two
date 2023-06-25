<?php

use Illuminate\Support\Facades\Route;

// Guest
Route::view('/', 'pages.index');
Route::view('/signin', 'pages.signin');

// Auth
Route::view('/admin/dashboard', 'admin.dashboard.index');
Route::view('/admin/student', 'admin.student.index');
Route::view('/admin/document', 'admin.document.index');
Route::view('/admin/contact', 'admin.contact.index');
Route::view('/admin/chats', 'admin.chat.index');

// Wrong Route
Route::fallback(function() {
  return view('pages.404');
});