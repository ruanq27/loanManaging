<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = [
        'name',
        'location',
        'type_of_market',
        'market_value',
        'description',
    ];
}
