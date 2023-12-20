<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function getCountriesList(Request $request)
    {
        return CountryResource::collection(Country::all());
    }

    public function getCountry(Request $request, string $county)
    {
        return CountryResource::make(Country::where('alias', $county)->first());
    }

    public function getCity(Request $request, string $city)
    {
        return CountryResource::make(Country::where('city', $city)->first());
    }
}
