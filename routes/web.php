<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\IncomeTypeController;
use App\Http\Controllers\LegalSituationController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\StudyLevelController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgeGapController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\HomeController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
*/
Route::resource('adherent',AdherentController::class);
Route::resource('home',HomeController::class);
Route::resource('kids',KidController::class);
Route::resource('agegap',AgeGapController::class);
Route::resource('gender',GenderController::class);
Route::resource('year',YearController::class);
Route::resource('group',GroupController::class);
Route::resource('teacher',TeacherController::class);
Route::resource('activity',ActivityController::class);
Route::resource('city',CityController::class);
Route::resource('incometype',IncomeTypeController::class);
Route::resource('legalsituation',LegalSituationController::class);
Route::resource('maritalstatus',MaritalStatusController::class);
Route::resource('paymentmethod',PaymentMethodController::class);
Route::resource('setting',SettingController::class);
Route::resource('country',CountryController::class);
Route::resource('studylevel',StudyLevelController::class);

/*Route::get('/settings/agegap/index', function () {
    return view('settings.agegap.index');
});*/
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

/*
Route::get('login',[AuthController::class, 'index'])->name('');
Route::get('signup',[AuthController::class, 'signup']);
Route::get('agegap',[AgeGapController::class, 'index']);
Route::get('agegap',[AgeGapController::class, 'index']);
*/
/* Route::get('kids',[KidsController::class, 'index'])->name('kids.index');
Route::get('kids/create',[KidsController::class, 'create'])->name('kids.create');
Route::get('kids/{id}',[KidsController::class, 'show'])->name('kids.show');*/
