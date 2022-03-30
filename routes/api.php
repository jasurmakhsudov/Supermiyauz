<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/checkout', [CheckoutsController::class,'create'])->name('checkout');  

Route::group(['as' => 'transaction.', 'prefix' => 'transaction',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
    Route::post('/create', [App\Http\Controllers\TransactionController::class, 'create'])->name('create');
    Route::post('/verify', [App\Http\Controllers\TransactionController::class, 'verify'])->name('verify');
    Route::post('/direct', [App\Http\Controllers\TransactionController::class, 'direct'])->name('direct');
});

Route::group(['as' => 'check.', 'prefix' => 'check','namespace' => 'Check'], function () {
    Route::post('/phone', [App\Http\Controllers\CheckController::class,'phone'])->name('phone');
    Route::post('/referral', [App\Http\Controllers\CheckController::class,'referral'])->name('referral');
});

Route::post('/login', [CheckoutsController::class,'login'])->name('login');