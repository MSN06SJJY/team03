<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BikePath extends Model
{
    use HasFactory;

    protected $table = "bike_paths";

    protected $fillable = [
        'bike_path_name',
        'district',
        'length',
        'nearby_attractions'
    ];
}