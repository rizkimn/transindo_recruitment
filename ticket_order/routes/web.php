<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StaffController;

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
    return view('portal');
});


Route::get('/login',  [StaffController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [StaffController::class, 'auth']);
Route::get('/logout', [StaffController::class, 'logout'])->middleware('auth');

Route::get('/admin',   [StaffController::class, 'admin'])->middleware('auth');
Route::get('/checkin', [StaffController::class, 'admin'])->middleware('auth');
Route::get('/laporan', [StaffController::class, 'admin'])->middleware('auth');

Route::post('/order/new',           [OrderController::class, 'create']);
Route::put('/order/edit/{id}',      [OrderController::class, 'update']);
Route::delete('/order/delete/{id}', [OrderController::class, 'delete']);
