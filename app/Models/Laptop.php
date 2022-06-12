<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'laptops';
    protected $primaryKey = 'id';
    protected $fillable = ['company', 'product', 'type_name', 'inches', 'screen_resolution', 'cpu', 'ram', 'memory', 'gpu', 'operating_system', 'weight', 'price_euros'];
}
