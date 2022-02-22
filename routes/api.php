<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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

Route::prefix('reservation')->middleware('auth')->group(function(){
    Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservation_list', [ReservationController::class, 'reservation_list'])->name('reservation.reservation_list');

    // Route::get('/reservations',function(){
    //     return \App\Models\Reservation::all();
    // });
    
        Route::post('/', [ReservationController::class, 'store'])->name('reservation.store');
    });