<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\NewStudentController;
use App\Http\Controllers\Admin\NotifController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\IndonesiaController;
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
  route::get('/admin/student/create', 'create');
  route::get('/admin/student/{id}/edit', 'edit');
});

Route::controller(DocumentController::class)->group(function () {
  route::get('/admin/document', 'index');
});

Route::controller(ContactController::class)->group(function () {
  route::get('/admin/contact', 'index');
});

Route::controller(SettingController::class)->group(function () {
  route::get('/admin/setting', 'index');
  route::delete('/admin/setting/{id}', 'destroy');
});

Route::controller(NotifController::class)->group(function() {
  route::get('/admin/notif', 'index');
});

// 404 Route
Route::fallback(function () {
  return view('pages.404');
});

// Chart Route
Route::get('/charts', function () {
  $datas = NewStudent::all();
  $mahad = NewStudent::where('is_pesantren', 1)->get();

  // $yearly = NewStudent::select('jenjang', 'tahun_ppdb')->get();
  $yearly = collect($datas)->groupBy(['jenjang', function ($item) {
    return $item['tahun_ppdb'];
  }]);
  $ponpes = collect($mahad)->groupBy('tahun_ppdb');
  // $gender = collect($datas)->groupBy('gender');
  $parentJob = collect($datas)->groupBy('pekerjaan_ayah');
  $parentIncome = collect($datas)->groupBy('penghasilan_ayah');

  $gender = collect($datas)->groupBy(['gender', function ($item) {
    return $item['tahun_ppdb'];
  }]);


  return response()->json([
    'yearly' => $yearly,
    'gender' => $gender,
    'parentJob' => $parentJob,
    'parentIncome' => $parentIncome,
    'ponpes' => $ponpes,
  ]);
});

// Indonesia Route
Route::controller(IndonesiaController::class)->group(function () {
  route::post('/kabupaten', 'GetRegency');
  route::post('/kecamatan', 'GetDistrict');
  route::post('/kelurahan', 'GetVillage');
  route::post('/kabupaten/byId', 'GetRegencyById');
  route::post('/kecamatan/byId', 'GetDistrictById');
  route::post('/kelurahan/byId', 'GetVillageById');
});
