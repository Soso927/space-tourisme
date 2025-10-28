@csrf
<div class="space-y-4">
  <label class="block">
    <span class="block font-medium">Nom *</span>
    <input name="name" value="{{ old('name', $planet->name ?? '') }}" class="input">
    @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </label>

  <label class="block">
    <span class="block font-medium">Slug </span>
    <input name="slug" value="{{ old('slug', $planet->slug ?? '') }}" class="input">
    @error('slug') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </label>

  <label class="block">
    <span class="block font-medium">Image</span>
    <input type="file" name="image" accept="image/*">
    @isset($planet->image_path)
      <img src="{{ asset('storage/'.$planet->image_path) }}" class="h-16 mt-2">
    @endisset
    @error('image') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </label>

  <label class="block">
    <span class="block font-medium">Description</span>
    <textarea name="description" rows="4" class="textarea">{{ old('description', $planet->description ?? '') }}</textarea>
    @error('description') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
  </label>

  <div class="grid grid-cols-2 gap-4">
    <label class="block">
      <span class="block font-medium">Distance (km)</span>
      <input type="number" name="distance_km" value="{{ old('distance_km', $planet->distance_km ?? '') }}" class="input">
      @error('distance_km') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </label>
    <label class="block">
      <span class="block font-medium">Durée (jours)</span>
      <input type="number" name="duration_days" value="{{ old('duration_days', $planet->duration_days ?? '') }}" class="input">
      @error('duration_days') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </label>
  </div>
</div>
