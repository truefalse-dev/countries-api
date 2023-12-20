<?php

namespace Database\Seeders;

use Countries;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $countries = collect(Countries::getList('name'))
            ->values()
            ->map( function($country) { 

                $country['capital'] = $country['capital'] ?? 'N/A';
                $country['flag'] = $country['flag'] ?? null;
                $country['alias'] = Str::slug($country['name']);
                $country['population'] = rand(10000, 1000000);
                $country['area'] = rand(1000, 3000);
                $country['city'] = Str::slug($country['capital']);
                $country['iso'] = $country['iso_3166_3'];

                return collect($country)->only([
                    'alias', 
                    'name', 
                    'capital',
                    'city',
                    'flag',
                    'area',
                    'population',
                    'iso',
                ])->all();
            });

        Country::insert($countries->toArray());
    }
}
