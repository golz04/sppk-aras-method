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
        // dd($row);
        return new Laptop([
            // "id" => $row[0],
            "company" => $row[1],
            "memory_type" => $row[2],
            "product" => $row[3],
            "type_name" => $row[4],
            "inches" => $row[5],
            "screen_resolution" => $row[6],
            "cpu" => $row[7],
            "ram" => $row[8],
            "memory" => $row[9],
            "gpu" => $row[10],
            "operating_system" => $row[11],
            "weight" => $row[12],
            "price_euros" => $row[13],
            // "created_at" => now(),
            // "updated_at" => now(),
        ]);
    }
}
