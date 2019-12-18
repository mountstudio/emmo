<?php

namespace App\Imports;

use App\City;
use Maatwebsite\Excel\Concerns\ToModel;

class CitiesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return City
     */
    public function model(array $row)
    {
        return new City([
            'title' => $row[0],
        ]);
    }
}
