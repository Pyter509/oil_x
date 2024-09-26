<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
    use HasFactory;

    protected $table = 'oil';

    public $timestamps=true;
    protected $fillable= [
        'oil_name',
        'car_type',
        'car_model',
        'manufacturing_year',
        'engine_type',
        'price',
        'status',
    ];
}
