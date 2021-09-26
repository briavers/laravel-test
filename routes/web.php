<?php

use App\Http\Controllers\Company\CreateController as CompanyCreateController;
use App\Http\Controllers\Company\DeleteController as CompanyDeleteController;
use App\Http\Controllers\Company\StoreController as CompanyStoreController;
use App\Http\Controllers\Company\EditController as CompanyEditController;
use App\Http\Controllers\Company\PutController as CompanyPutController;
use App\Http\Controllers\Company\IndexController as CompanyIndex;
use App\Http\Livewire\City\Index as CityIndex;
use App\Http\Livewire\City\Set;
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
Route::get('/', CityIndex::class)->name('home');


Route::prefix('/city')->group(function () {
    Route::get('/', CityIndex::class)->name('city-index');
    Route::get('/new', Set::class)->name('city-create');
    Route::get('/edit/{city}', Set::class)->name('city-set');
});

Route::prefix('/company')->group(function () {
    Route::get('/', CompanyIndex::class)->name('company-index');
    Route::post('/', CompanyStoreController::class)->name('company-store');
    Route::get('/new', CompanyCreateController::class)->name('company-create');
    Route::get('/edit/{company}', CompanyEditController::class)->name('company-edit');
    Route::put('/put/{company}', CompanyPutController::class)->name('company-put');
    Route::delete('/delete/{company}', CompanyDeleteController::class)->name('company-delete');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
