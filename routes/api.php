<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PatientController;

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


Route::resource('auth', AuthController::class);

Route::group(['middleware' => ['auth:api'] ], function () {
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('file', FileController::class);
    Route::resource('type', TypeController::class);
    Route::resource('patient', PatientController::class);
});
