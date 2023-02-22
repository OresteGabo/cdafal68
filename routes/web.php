<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentController;

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
Route::get('adherent/{id}', [AdherentController::class, 'show']);

