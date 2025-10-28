<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $fillable = [
      'name','image_path','description','distance_km','duration_days'
    ];

    public function getRouteKeyName(): string { return 'slug'; }

    // Jolis formats pour l’affichage public
    public function getDistanceLabelAttribute(): string
    { return $this->distance_km ? number_format($this->distance_km, 0, ',', ' ').' km' : '-'; }

    public function getDurationLabelAttribute(): string
    { return $this->duration_days ? $this->duration_days.' jour'.($this->duration_days>1?'s':'') : '-'; }
}