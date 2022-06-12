<?php

namespace App\Imports;

use App\Models\Laptop;
use Maatwebsite\Excel\Concerns\ToModel;

class LaptopsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Laptop([
            // "id" => $row[0],
            "company" => $row[1],
            "product" => $row[2],
            "type_name" => $row[3],
            "inches" => $row[4],
            "screen_resolution" => $row[5],
            "cpu" => $row[6],
            "ram" => $row[7],
            "memory" => $row[8],
            "gpu" => $row[9],
            "operating_system" => $row[10],
            "weight" => $row[11],
            "price_euros" => $row[12],
            // "created_at" => now(),
            // "updated_at" => now(),
        ]);
    }
}
