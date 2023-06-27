<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\NewStudentController;
use App\Models\NewStudent;
use Illuminate\Support\Facades\Route;

// Guest
Route::view('/', 'pages.index');
Route::view('/signin', 'pages.signin');

// Auth
Route::controller(DashboardController::class)->group(function () {
  route::get('/admin/dashboard', 'index');
});

Route::controller(NewStudentController::class)->group(function () {
  route::get('/admin/student', 'index');
});

Route::controller(DocumentController::class)->group(function () {
  route::get('/admin/document', 'index');
});

Route::controller(ContactController::class)->group(function () {
  route::get('/admin/contact', 'index');
});

Route::view('/admin/setting', 'admin.setting.index');

// Wrong Route
Route::fallback(function () {
  return view('pages.404');
});

// Chart Route
Route::get('/charts', function () {
  $datas = NewStudent::all();

  $yearly = NewStudent::select('jenjang', 'tahun_ppdb')->get();
  $gender = collect($datas)->groupBy('gender');
  $parentJob = collect($datas)->groupBy('pekerjaan_ayah');
  $parentIncome = collect($datas)->groupBy('penghasilan_ayah');

  return response()->json([
    'yearly' => $yearly,
    'gender' => $gender,
    'parentJob' => $parentJob,
    'parentIncome' => $parentIncome,
  ]);
});
