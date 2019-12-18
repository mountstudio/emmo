<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = \Maatwebsite\Excel\Facades\Excel::import(new \App\Imports\CitiesImport(), public_path('images/1.xlsx'));
    }
}
