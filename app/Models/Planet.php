<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = [
        'name',
        'description',
        'distance',
        'travel_time',
        'image',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
