<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('getcountrieslist', [CountriesController::class, 'getCountriesList']);
Route::get('getcountry/{country}', [CountriesController::class, 'getCountry']);
Route::get('getcity/{city}', [CountriesController::class, 'getCity']);