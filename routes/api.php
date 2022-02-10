<?php

use App\Http\Controllers\PlaceController;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
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
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout'])->name('logout');
    Route::apiResource('/places', PlaceController::class);
});

Route::get('/test', function (){
    $users = User::all();
    return response()->json(['users' => $users]);
});
