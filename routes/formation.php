<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

Route::get('/formation/sdb/', [FormationController::class, 'index'])->name('sdb');
Route::get('/formation/sdb/flyers', [FormationController::class, 'sdbFlyer'])->name('sdb.flyers');
Route::get('/formation/sdb/session1', [FormationController::class, 'sdbSession1'])->name('sdb.s1');
Route::get('/formation/sdb/session2', [FormationController::class, 'sdbSession2'])->name('sdb.s2');

Route::get('/formation/informatique/excel', [FormationController::class, 'excel'])->name('informatique.excel');
Route::get('/formation/informatique/email', [FormationController::class, 'email'])->name('informatique.email');
Route::get('/formation/informatique/word', [FormationController::class, 'word'])->name('informatique.word');

Route::get('/formation/linguistique/a1', [FormationController::class, 'linguistiqueA1'])->name('linguistique.a1');
Route::get('/formation/linguistique/a2', [FormationController::class, 'linguistiqueA2'])->name('linguistique.a2');
Route::get('/formation/linguistique/b1', [FormationController::class, 'linguistiqueB1'])->name('linguistique.b1');
Route::get('/formation/linguistique/b2', [FormationController::class, 'linguistiqueB2'])->name('linguistique.b2');
Route::get('/formation/linguistique/le1', [FormationController::class, 'linguistiqueLE1'])->name('linguistique.le1');
Route::get('/formation/linguistique/le2', [FormationController::class, 'linguistiqueLE2'])->name('linguistique.le2');
Route::get('/formation/mesure', [FormationController::class, 'mesure'])->name('mesure');
Route::get('/formation/pourparler', [FormationController::class, 'pourParler'])->name('pourparler');


Route::resource('formation',FormationController::class);

