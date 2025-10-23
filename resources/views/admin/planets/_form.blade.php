{{-- resources/views/admin/planets/_form.blade.php --}}
@props([
    'planet' => null, // Model ou null en création
])

@php
    $isEdit = filled($planet?->id);
@endphp

{{-- Messages d'erreurs globaux --}}
@if ($errors->any())
    <div class="mb-6 rounded border border-red-300 bg-red-50 p-4 text-red-700">
        <p class="font-semibold mb-2">Veuillez corriger les erreurs ci-dessous :</p>
        <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid gap-6 md:grid-cols-2">
    {{-- Nom --}}
    <div class="flex flex-col gap-2">
        <label for="name" class="text-sm font-medium">Nom de la planète</label>
        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $planet->name ?? '') }}"
            class="rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
            placeholder="Ex. Lune"
            required
        />
        @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>

    {{-- Distance --}}
    <div class="flex flex-col gap-2">
        <label for="distance" class="text-sm font-medium">Distance</label>
        <input
            id="distance"
            name="distance"
            type="text"
            value="{{ old('distance', $planet->distance ?? '') }}"
            class="rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
            placeholder="Ex. 384 000 km"
            required
        />
        @error('distance') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>

    {{-- Durée de voyage --}}
    <div class="flex flex-col gap-2">
        <label for="travel_time" class="text-sm font-medium">Durée de voyage</label>
        <input
            id="travel_time"
            name="travel_time"
            type="text"
            value="{{ old('travel_time', $planet->travel_time ?? '') }}"
            class="rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
            placeholder="Ex. 3 jours"
            required
        />
        @error('travel_time') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>

    {{-- Image --}}
    <div class="flex flex-col gap-2">
        <label for="image" class="text-sm font-medium">Image</label>
        <input
            id="image"
            name="image"
            type="file"
            accept="image/*"
            class="rounded border border-gray-300 px-3 py-2 file:mr-3 file:rounded file:border file:bg-gray-100 file:px-3 file:py-2"
            @if(!$isEdit) required @endif
        />
        @error('image') <p class="text-sm text-red-600">{{ $message }}</p> @enderror

        @if($isEdit && $planet->image ?? false)
            <div class="mt-2">
                <p class="text-xs text-gray-500 mb-1">Aperçu de l'image actuelle :</p>
                <img src="{{ Storage::url($planet->image) }}" alt="{{ $planet->name }}" class="h-24 w-24 rounded object-cover border" />
            </div>
        @endif
    </div>

    {{-- Description (pleine largeur) --}}
    <div class="md:col-span-2 flex flex-col gap-2">
        <label for="description" class="text-sm font-medium">Description</label>
        <textarea
            id="description"
            name="description"
            rows="5"
            class="rounded border border-gray-300 px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
            placeholder="Texte de présentation…"
            required
        >{{ old('description', $planet->description ?? '') }}</textarea>
        @error('description') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>

    {{-- Publication --}}
    <div class="md:col-span-2 flex items-center gap-3">
        <input
            id="is_published"
            name="is_published"
            type="checkbox"
            value="1"
            class="h-4 w-4 rounded border-gray-300"
            {{ old('is_published', $planet->is_published ?? false) ? 'checked' : '' }}
        />
        <label for="is_published" class="text-sm">Publié</label>
        @error('is_published') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
    </div>
</div>

{{-- Actions --}}
<div class="mt-8 flex items-center gap-3">
    <a href="{{ route('planets.index') }}" class="rounded border px-4 py-2">
        Annuler
    </a>
    <button type="submit" class="rounded bg-blue-600 px-5 py-2 text-white hover:bg-blue-700">
        {{ $isEdit ? 'Mettre à jour' : 'Créer' }}
    </button>
</div>
