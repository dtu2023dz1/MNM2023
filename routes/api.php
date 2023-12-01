<?php

use App\Http\Controllers\AutoController;
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
