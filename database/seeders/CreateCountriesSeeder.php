<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class CreateCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = file_get_contents(storage_path('countries/countries.json'));
        $countries = json_decode($countries, true)['countries'];
        Country::insert($countries);

       
    }
}
