<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeightLogController;


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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::post('/register/step1', [RegisterController::class, 'step1']);
Route::post('/register/step2', [RegisterController::class, 'step2']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/weight_logs', [AuthController::class, 'index']);
Route::get('/weight_logs', [WeightLogController::class, 'index']);

