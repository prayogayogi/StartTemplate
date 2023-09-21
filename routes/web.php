<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route Admin
Route::prefix('/admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    // Route Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('verified');

    // Route data master data
    Route::resource('/master', MasterController::class)->middleware('RoleRedirect');
});

Route::get('admin-page', function () {
    return '<h1>Halaman untuk Admin</h1>';
})->middleware(['role:admin'])->name('admin.page');

Route::get('penulis-page', function () {
    return '<h1>Halaman untuk penulis</h1';
})->middleware(['role:penulis'])->name('penulis.page');
