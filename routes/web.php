<?php

use App\Http\Controllers\Company\CreateController as CompanyCreateController;
use App\Http\Controllers\Company\DeleteController as CompanyDeleteController;
use App\Http\Controllers\Company\StoreController as CompanyStoreController;
use App\Http\Controllers\Company\EditController as CompanyEditController;
use App\Http\Controllers\Company\PutController as CompanyPutController;
use App\Http\Controllers\Company\IndexController as CompanyIndex;
use App\Http\Controllers\Vacancy\CreateController as VacancyCreateController;
use App\Http\Controllers\Vacancy\DeleteController as VacancyDeleteController;
use App\Http\Controllers\Vacancy\ShowController as VacancyShowController;
use App\Http\Controllers\Vacancy\StoreController as VacancyStoreController;
use App\Http\Controllers\Vacancy\EditController as VacancyEditController;
use App\Http\Controllers\Vacancy\PutController as VacancyPutController;
use App\Http\Controllers\Vacancy\IndexController as VacancyIndex;
use App\Http\Livewire\City\Index as CityIndex;
use App\Http\Livewire\City\Set as CitySet;
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
Route::get('/', VacancyIndex::class)->name('home');


Route::prefix('/city')->middleware('auth')->group(function () {
    Route::get('/', CityIndex::class)->name('city-index');
    Route::get('/new', CitySet::class)->name('city-create');
    Route::get('/edit/{city}', CitySet::class)->name('city-set');
});

Route::prefix('/company')->middleware('auth')->group(function () {
    Route::get('/', CompanyIndex::class)->name('company-index');
    Route::post('/', CompanyStoreController::class)->name('company-store');
    Route::get('/new', CompanyCreateController::class)->name('company-create');
    Route::get('/edit/{company}', CompanyEditController::class)->name('company-edit');
    Route::put('/put/{company}', CompanyPutController::class)->name('company-put');
    Route::delete('/delete/{company}', CompanyDeleteController::class)->name('company-delete');
});

Route::prefix('/vacancy')->group(function () {
    Route::get('/', VacancyIndex::class)->name('vacancy-index');
    Route::middleware('auth')->group(function () {
        Route::post('/', VacancyStoreController::class)->name('vacancy-store');
        Route::get('/new', VacancyCreateController::class)->name('vacancy-create');
        Route::get('/edit/{vacancy}', VacancyEditController::class)->name('vacancy-edit');
        Route::put('/put/{vacancy}', VacancyPutController::class)->name('vacancy-put');
        Route::delete('/delete/{vacancy}', VacancyDeleteController::class)->name('vacancy-delete');
    });
    Route::get('/{vacancy}', VacancyShowController::class)->name('vacancy-show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
