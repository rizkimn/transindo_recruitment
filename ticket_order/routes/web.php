<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::get('/login', function () {
    return view('staff.login');
});

Route::get('/admin', function () {
    return view('staff.dashboard');
});

Route::post('/order/new', [OrderController::class, 'create']);
