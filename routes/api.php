<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/index', [MahasiswaController::class, 'index']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/show', [MahasiswaController::class, 'show']);
Route::put('/update', [MahasiswaController::class, 'update']);
Route::delete('/destroy', [MahasiswaController::class, 'destroy']);
