<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CountriesController extends Controller
{
    public function getCountriesList(Request $request)
    {
        return CountryResource::collection(Country::orderBy('sort_order')->get());
    }

    public function getCountry(Request $request, string $country)
    {
        $countryData = Country::where('alias_name', $country)->first();

        if(empty($countryData))
            throw ValidationException::withMessages(['Країну не знайдено']);

        return CountryResource::make($countryData);
    }

    public function getCity(Request $request, string $city)
    {
        $countryData = Country::where('alias_capital', $city)->first();

        if(empty($countryData))
            throw ValidationException::withMessages(['Країну не знайдено']);

        return CountryResource::make($countryData);
    }
}
