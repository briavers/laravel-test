<?php

use App\Http\Livewire\City\Create as CityCreate;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
