<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('admin')->group(function(){
    Route::middleware('auth:admin-api')->group(function(){
        Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function(){
            Route::get('me', 'me');
        });
    });

    Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function(){
        Route::post('login', 'login');
        Route::post('admins', 'store');
        Route::get('admins', 'index');
        Route::get('admins/{id}', 'show');
        Route::put('admins/{id}', 'update');
        Route::put('admins/{id}/change-password', 'changePassword');
        Route::delete('admins/{id}', 'destroy');
        Route::get('/logout', 'logout');
    });
});
