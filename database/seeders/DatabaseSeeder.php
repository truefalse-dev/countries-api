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
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Syria',
                'alias_name'    => 'Syria ',
                'capital'       => 'Damascus',
                'alias_capital' => 'Damascus',
                'continent'     => 'Asia',
                'population'    => '17500657',
                'area'          => '185180',
                'languages'     => 'Arabic',
                'flags'         => 'sy.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Denmark',
                'alias_name'    => 'Denmark ',
                'capital'       => 'Copenhagen',
                'alias_capital' => 'Copenhagen',
                'continent'     => 'Europe',
                'population'    => '5831404',
                'area'          => '43094',
                'languages'     => 'Danish',
                'flags'         => 'dk.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Venezuela',
                'alias_name'    => 'Venezuela ',
                'capital'       => 'Caracas',
                'alias_capital' => 'Caracas',
                'continent'     => 'Americas',
                'population'    => '28435943',
                'area'          => '916445',
                'languages'     => 'Spanish',
                'flags'         => 've.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Germany',
                'alias_name'    => 'Germany ',
                'capital'       => 'Berlin',
                'alias_capital' => 'Berlin',
                'continent'     => 'Europe',
                'population'    => '83240525',
                'area'          => '357114',
                'languages'     => 'German',
                'flags'         => 'de.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Greenland',
                'alias_name'    => 'Greenland ',
                'capital'       => 'Nuuk',
                'alias_capital' => 'Nuuk',
                'continent'     => 'Americas',
                'population'    => '56367',
                'area'          => '2166086',
                'languages'     => 'German',
                'flags'         => 'gl.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Georgia',
                'alias_name'    => 'Georgia ',
                'capital'       => 'Tbilisi',
                'alias_capital' => 'Tbilisi',
                'continent'     => 'Asia',
                'population'    => '3714000',
                'area'          => '69700',
                'languages'     => 'Georgian',
                'flags'         => 'ge.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Italy',
                'alias_name'    => 'Italy ',
                'capital'       => 'Rome',
                'alias_capital' => 'Rome',
                'continent'     => 'Europe',
                'population'    => '59554023',
                'area'          => '301336',
                'languages'     => 'Italian',
                'flags'         => 'it.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Greece',
                'alias_name'    => 'Greece ',
                'capital'       => 'Athens',
                'alias_capital' => 'Athens',
                'continent'     => 'Europe',
                'population'    => '10715549',
                'area'          => '131990',
                'languages'     => 'Greek',
                'flags'         => 'gr.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Albania',
                'alias_name'    => 'Albania ',
                'capital'       => 'Tirana',
                'alias_capital' => 'Tirana',
                'continent'     => 'Europe',
                'population'    => '2837743',
                'area'          => '28748',
                'languages'     => 'Albanian',
                'flags'         => 'al.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Sweden',
                'alias_name'    => 'Sweden ',
                'capital'       => 'Stockholm',
                'alias_capital' => 'Stockholm',
                'continent'     => 'Europe',
                'population'    => '10353442',
                'area'          => '450295',
                'languages'     => 'Swedish',
                'flags'         => 'se.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Zimbabwe',
                'alias_name'    => 'Zimbabwe ',
                'capital'       => 'Harare',
                'alias_capital' => 'Harare',
                'continent'     => 'Africa',
                'population'    => '14862927',
                'area'          => '390757',
                'languages'     => 'Chibarwe,English,Kalanga,Khoisan,Ndau,Northern Ndebele,Chewa,Shona,Sotho,Tonga,Tswana,Tsonga,Venda,Xhosa,Zimbabwean Sign Language',
                'flags'         => 'zw.png',
                'sort_order'    => 100,
            ],
            [
                'name'          => 'Ecuador',
                'alias_name'    => 'Ecuador ',
                'capital'       => 'Quito',
                'alias_capital' => 'Quito',
                'continent'     => 'Americas',
                'population'    => '17643060',
                'area'          => '276841',
                'languages'     => 'Spanish',
                'flags'         => 'ec.png',
                'sort_order'    => 100,
            ],
        ];
        
        Country::insert($arCountries);
    }
}
