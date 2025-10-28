<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetUpdateRequest extends FormRequest {
  public function authorize(): bool { return $this->user()->can('planets.create'); }
  public function rules(): array {
    return [
      'name' => ['required','string','max:100'],
      // 'slug' => ['required','alpha_dash','max:120','unique:planets,slug.$this->planet->id'],
      'description' => ['nullable','string'],
      'distance_km' => ['nullable','integer','min:0'],
      'duration_days' => ['nullable','integer','min:0'],
      'image' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
    ];
  }
}

