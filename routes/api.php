<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\DashboardController;

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

Route::controller(AuthController::class)->group(function () {

    Route::post('login', 'login');

});

Route::middleware(['auth:api', 'CheckAdmin'])->group(function () {

    Route::controller(UserController::class)->group(function () {


        Route::post('users', 'index');
        Route::post('add/user', 'store');
        Route::post('update/user/{user}', 'update');
        Route::post('user/profile', 'profile');
        Route::post('user/profile/update', 'addProfile');
        Route::post('delete/user/{user}', 'delete');
    }); 

     Route::controller(DashboardController::class)->group(function () {

        Route::post('dashboard', 'dashboard');
    }); 

});

