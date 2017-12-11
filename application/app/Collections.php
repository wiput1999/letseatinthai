<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    protected $table = "collections";

    protected $fillable = [
        'name_th', 'name_en', 'description_th', 'description_en'
    ];
}
