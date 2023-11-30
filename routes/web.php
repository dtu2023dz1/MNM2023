<?php

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
Route::get('/chu-de', [ChuDeController::class, 'viewChuDe']);
Route::get('/de-muc', [DeMucController::class, 'viewDeMuc']);
Route::get('/chuong', [ChuongController::class, 'viewChuong']);
