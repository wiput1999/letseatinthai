<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $table = "restaurants";

    protected $fillable = ['name_th', 'name_en', 'location_lat', 'location_lng', 'photo', 'available', 'updated_at'];

    protected $casts = [
        'available' => 'boolean'
    ];
}
