<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeGapController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
//Route::get('/adherent', 'AdherentController@index');
Route::get('adherent', [AdherentController::class, 'index']);


//Route::get('/adherent/{id}','AdherentController@show');

Route::get('adherent/create', [AdherentController::class, 'create']);

Route::get('adherent/{id}', [AdherentController::class, 'show']);

//
Route::get('dashboard', [DashboardController::class, 'index']);

//
Route::get('login',[AuthController::class, 'index']);
Route::get('signup',[AuthController::class, 'signup']);
Route::get('agegap',[AgeGapController::class, 'index']);
