<?php

namespace Database\Seeders;

use Countries;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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
            ->map( fn ($country) =>
                [
                    'name'      => $country['name'],
                    'iso'       => $country['iso_3166_3'],
                    'capital'   => $country['capital'] ?? 'N/A',
                    'flag'      => $country['flag'] ?? null,
                    'alias'     => Str::slug($country['name']),
                    'population' => rand(10000, 1000000),
                    'area'      => rand(1000, 3000),
                    'city'      => isset($country['capital']) 
                        ? Str::slug($country['capital']) 
                        : null,
                ]
            );

        Country::insert($countries->toArray());
    }
}
