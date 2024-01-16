<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

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
//     return view('welcome');
// });


Route::get('/', [DatabaseController::class, 'showForm']);
Route::post('/database-connection', [DatabaseController::class, 'checkConnection']);
Route::post('/migrate-table', [DatabaseController::class, 'migrateTable']);
Route::get('/site-settings', [DatabaseController::class, 'siteSettings'])->name('sites');
Route::post('/site-settings',[DatabaseController::class, 'storeSite'])->name('sites_connection');
Route::post('/setup-finished',[DatabaseController::class, 'siteCompleted'])->name('sites_setup_completed');




