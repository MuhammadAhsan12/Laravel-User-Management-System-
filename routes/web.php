<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegesterController;
use App\Http\Controllers\SessionController;

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
//     return view('home');
// });

Route::get('/regester', [RegesterController::class, 'create']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/regester', [RegesterController::class, 'store']);
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);
Route::get('/', [SessionController::class, 'get']);
