<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CountriesController extends Controller
{
    // метод повернення країн
    public function getCountriesList(Request $request)
    {
        // отримуємо країни з бази данних з сортуванням по `sort_order`
        $countries = Country::orderBy('sort_order')->get();
        
        // виводимо отриманий лист у відповідь через ресурс `CountryResource`
        return CountryResource::collection($countries);
    }

    // метод повернення країни по аліасу $country
    public function getCountry(Request $request, string $country)
    {
        // отримуємо країну з бази данних по ключу `alias_name`, беремо единий кортеж
        $countryData = Country::where('alias_name', $country)->first();

        // перевіряємо чи є такий кортеж, якщо ні виводимо виключення - `Країну не знайдено`
        if(empty($countryData))
            throw ValidationException::withMessages(['Країну не знайдено']);

        // виводимо отриману країну у відповідь через ресурс `CountryResource`    
        return CountryResource::make($countryData);
    }

    // метод повернення країни по аліасу міста $city
    public function getCity(Request $request, string $city)
    {
        // отримуємо країну з бази данних по ключу `alias_capital`, беремо единий кортеж
        $countryData = Country::where('alias_capital', $city)->first();

        // перевіряємо чи є такий кортеж, якщо ні виводимо виключення - `Країну не знайдено`
        if(empty($countryData))
            throw ValidationException::withMessages(['Країну не знайдено']);

        // виводимо отриману країну у відповідь через ресурс `CountryResource`     
        return CountryResource::make($countryData);
    }
}
