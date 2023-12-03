<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ChatConTroller;
use App\Http\Controllers\ChuDeController;
use App\Http\Controllers\ChuongController;
use App\Http\Controllers\DeMucController;
use App\Models\Admin;
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

Route::get('/', function () {
    return view('admin.share.master');
});

Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/data-excel', [AutoController::class, 'dataExcel']);
Route::group(['prefix'  =>  '/admin', "middleware" => "adminMiddleWare"], function() {
    Route::group(['prefix'  =>  '/chu-de'], function() {
        Route::get('/', [ChuDeController::class, 'viewChuDe']);
        Route::get('/data', [ChuDeController::class, 'getData']);
        Route::post('/doi-trang-thai', [ChuDeController::class, 'doiTrangThai']);
        Route::post('/update', [ChuDeController::class, 'updateChuDe']);
    });
    Route::group(['prefix'  =>  '/de-muc'], function() {
        Route::get('/', [DeMucController::class, 'viewDeMuc']);
        Route::get('/data', [DeMucController::class, 'getData']);
        Route::post('/doi-trang-thai', [DeMucController::class, 'doiTrangThai']);
        Route::post('/update', [DeMucController::class, 'updateDeMuc']);
    });
    Route::group(['prefix'  =>  '/chuong'], function() {
        Route::get('/', [ChuongController::class, 'viewChuong']);
        Route::get('/data', [ChuongController::class, 'getData']);
        Route::post('/doi-trang-thai', [ChuongController::class, 'doiTrangThai']);
        Route::post('/update', [ChuongController::class, 'updateChuong']);
    });

    Route::group(['prefix'  =>  '/account'], function() {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/data', [AdminController::class, 'getData']);

        Route::post('/create', [AdminController::class, 'store']);
        Route::post('/update', [AdminController::class, 'update']);
        Route::post('/update-password', [AdminController::class, 'updatePasword']);
        Route::post('/delete', [AdminController::class, 'destroy']);
    });
});

Route::group([''], function() {
    Route::get('/chat', [ChatConTroller::class, 'index']);
});
