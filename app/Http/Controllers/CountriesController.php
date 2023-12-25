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
        $countries = Country::orderBy('sort_order')->get();
        
        return CountryResource::collection($countries);
    }

    public function getCountry(Request $request, string $county)
    {
        $country = Country::where('alias_name', $county)->first();

        if(empty($country))
            throw ValidationException::withMessages(['Країну не знайдено']);

        return CountryResource::make($country);
    }

    public function getCity(Request $request, string $city)
    {
        $country = Country::where('city', $city)->first();

        if(empty($country))
            throw ValidationException::withMessages(['Країну не знайдено']);

        return CountryResource::make($country);
    }
}
