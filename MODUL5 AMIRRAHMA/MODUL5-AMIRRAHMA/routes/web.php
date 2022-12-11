<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

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

Route::get('/', [ShowroomController::class, 'index']);
Route::get('addcar', [ShowroomController::class, 'addcar']);
Route::resource('insertmobil', ShowroomController::class);
Route::get('read', [ShowroomController::class, 'read']);
