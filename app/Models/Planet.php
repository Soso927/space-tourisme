<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Planet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'distance', 'durée', 'image_path',
    ];

    // Pour les URLs publiques si tu utilises le slug plus tard
    public function getRouteKeyName()
    {
        return 'id'; // ou 'slug' si tu veux binder par slug côté public
    }
}
