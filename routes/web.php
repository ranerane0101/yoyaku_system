<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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

Route::get('guest', 'LoginController@guestLogin')->name('login.guest');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('reservation')->middleware('auth:sanctum')->group(function(){
Route::get('/', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation.index');
Route::get('/reservation_list', [App\Http\Controllers\ReservationController::class, 'reservation_list'])->name('reservation.reservation_list');

Route::get('/request_reservation',[App\Http\Controllers\ReservationController::class,'request_reservation'])->name('reservation.request_reservation');

// Route::get('/',[App\Http\Controllers\ReservationController::class,'request_reservation'])->name('reservation.request_reservation');


    Route::post('/', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');
});