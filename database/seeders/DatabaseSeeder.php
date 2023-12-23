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
        $arCountries = [
            [
                'name'          => 'Україна',
                'alias_name'    => 'ukraine',
                'capital'       => 'Київ',
                'alias_capital' => 'kyiv',
                'continent'     => 'Europe',
                'population'    => '37000000',
                'area'          => '123456',
                'languages'     => 'українська',
                'flags'         => 'ua.png',
            ],
            [
                'name'          => '',
                'alias_name'    => '',
                'capital'       => '',
                'alias_capital' => '',
                'continent'     => '',
                'population'    => '',
                'area'          => '',
                'languages'     => '',
                'flags'         => '',
            ]
        ];
        
        Country::insert($arCountries);
    }
}
