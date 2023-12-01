<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ChuDeController;
use App\Http\Controllers\ChuongController;
use App\Http\Controllers\DeMucController;
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

Route::get('/data-excel', [AutoController::class, 'dataExcel']);
Route::group(['prefix'  =>  '/admin'], function() {
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
});
