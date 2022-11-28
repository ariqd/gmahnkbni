<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('schedule', App\Http\Controllers\ScheduleController::class)->only('index', 'show');
Route::resource('worships', App\Http\Controllers\WorshipController::class)->only('index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('worships', App\Http\Controllers\WorshipController::class)->only('show', 'edit');
    Route::put('worships/{id}/servant', [App\Http\Controllers\ServantWorshipController::class, 'update'])->name('servant-worship.update');
    Route::resource('skills', App\Http\Controllers\SkillController::class);
    Route::resource('criterias', App\Http\Controllers\CriteriaController::class);
    Route::resource('conditions', App\Http\Controllers\ConditionController::class);
    Route::resource('servants', App\Http\Controllers\ServantController::class);
    Route::get('servants/{id}/criterias', [App\Http\Controllers\ServantCriteriaController::class, 'index'])->name('servant-criterias.index');
    Route::put('servants/{id}/criterias', [App\Http\Controllers\ServantCriteriaController::class, 'update'])->name('servant-criterias.update');
    Route::delete('servants/{servant_id}/criterias', [App\Http\Controllers\ServantCriteriaController::class, 'destroy'])->name('servant-criterias.destroy');
});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
