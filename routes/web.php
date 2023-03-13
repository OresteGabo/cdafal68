<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeGapController;
use App\Http\Controllers\KidsController;

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
Route::get('adherent', [AdherentController::class, 'index'])->name('adherent.index');


//Route::get('/adherent/{id}','AdherentController@show');

Route::get('adherent/create', [AdherentController::class, 'create'])->name('adherent.create');

Route::get('adherent/{id}', [AdherentController::class, 'show'])->name('adherent.show');

//
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//
Route::get('login',[AuthController::class, 'index'])->name('');
Route::get('signup',[AuthController::class, 'signup']);
Route::get('agegap',[AgeGapController::class, 'index']);
Route::get('kids',[KidsController::class, 'index'])->name('kids.index');
Route::get('kids/create',[KidsController::class, 'create'])->name('kids.create');
Route::get('kids/{id}',[KidsController::class, 'show'])->name('kids.show');
