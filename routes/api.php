<?php

use App\Http\Controllers\API\Admincontroller;
use App\Http\Controllers\API\APIAdmincontroller;
use App\Http\Controllers\API\APIChuDeController;
use App\Http\Controllers\API\APIChuongController;
use App\Http\Controllers\API\APIDeMucController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ChuDeController;
use App\Http\Controllers\DeMucController;
use App\Http\Controllers\TieuMucController;
use App\Models\TieuMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/create-data-tieu-muc', [TieuMucController::class, 'storeApi']);
Route::get('/get-data-de-muc-api', [DeMucController::class, 'getDataAPI']);
Route::post('/create-tieu-muc', [TieuMucController::class, 'store']);
Route::get('/data-excel', [AutoController::class, 'dataExcel']);
Route::get('/create-de-muc-data/{id}', [DeMucController::class, 'createDataDeMuc']);
Route::get('/create-tieu-muc-data/{id}', [DeMucController::class, 'createDataTieuMuc']);
Route::post('/search-phap-dien', [ChuDeController::class, 'searchPhapDien']);


Route::group(['prefix'  =>  '/admin'], function() {
    Route::group(['prefix'  =>  '/chu-de'], function() {
        Route::get('/data', [APIChuDeController::class, 'getData']);
        Route::post('/doi-trang-thai', [APIChuDeController::class, 'doiTrangThai']);
        Route::post('/update', [APIChuDeController::class, 'updateChuDe']);

    });

    Route::group(['prefix'  =>  '/de-muc'], function() {
        Route::get('/data', [APIDeMucController::class, 'getData']);
        Route::post('/doi-trang-thai', [APIDeMucController::class, 'doiTrangThai']);
        Route::post('/update', [APIDeMucController::class, 'updateDeMuc']);
    });

    Route::group(['prefix'  =>  '/chuong'], function() {
        Route::get('/data', [APIChuongController::class, 'getData']);
        Route::post('/doi-trang-thai', [APIChuongController::class, 'doiTrangThai']);
        Route::post('/update', [APIChuongController::class, 'updateChuong']);
    });

    Route::group(['prefix'  =>  '/account'], function() {
        Route::get('/data', [APIAdmincontroller::class, 'getData']);
        Route::post('/create', [APIAdmincontroller::class, 'store']);
    });
});
