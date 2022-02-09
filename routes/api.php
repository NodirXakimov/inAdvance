<?php

use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register'])->name('register');
Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->get('/user', function (UserRegisterRequest $request) {
    return $request->all();
});
