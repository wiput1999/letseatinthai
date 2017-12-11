<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $table = "foods";

    protected $fillable = [
      'name_th', 'name_en', 'description_th', 'description_en', 'restaurant', 'price', 'photo', 'available'
    ];

    protected $casts = [
        'available' => 'boolean'
    ];
}
