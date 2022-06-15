<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\api_all;
use App\Http\Controllers\API\api_testing;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\LaporanController;
use App\Http\Controllers\API\LaporanTableController;
use App\Models\api_m;
use App\Models\LaporanModel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login', ['as' => 'login', 'uses' => 'App\Http\Controllers\API\AuthController@login_response']);
Route::post('index', [api_all::class, 'index']);
Route::post('request_contract', [api_all::class, 'post_request_contract']);
Route::post('compare_supplier_data', [api_all::class, 'compare_supplier_data']);
Route::post('customer_respons_contract', [api_all::class, 'customer_respons_contract']);
Route::post('do_payment', [api_all::class, 'do_payment']);
Route::post('prepare_order', [api_all::class, 'procedure_prepare_kontrak']);
Route::post('upload_image', [api_all::class, 'upload_image']);
Route::post('laporan/penjualan', [LaporanController::class, 'getLaporanPenjualan']);
Route::post('laporan/pembelian', [LaporanController::class, 'getLaporanPembelian']);
Route::post('laporan/hutang', [LaporanController::class, 'getLaporanHutang']);
Route::post('laporan/piutang', [LaporanController::class, 'getLaporanPiutang']);
Route::post('laporan/stok', [LaporanController::class, 'getLaporanStok']);
Route::post('laporan/biaya', [LaporanController::class, 'getLaporanBiaya']);
Route::post('laporan/pendapatan', [LaporanController::class, 'getLaporanPendapatan']);

// data table
Route::post('laporan/penjualan', [LaporanTableController::class, 'laporanp_priode']);
Route::post('laporan/pembelian', [LaporanTableController::class, 'laporanpem_priode']);
Route::post('laporan/hutang', [LaporanTableController::class, 'hutang']);
Route::post('laporan/piutang', [LaporanTableController::class, 'piutang']);
Route::post('laporan/stok', [LaporanTableController::class, 'inventory']);
Route::get('testing', [api_testing::class, 'testing']);



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});