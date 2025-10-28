{{-- resources/views/admin/planets/edit.blade.php --}}
<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            {{-- Titre + retour liste --}}
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold">Modifier la planète</h2>
                <a href="{{ route('admin.planets.index') }}" class="text-blue-600 underline">
                    ← Retour à la liste
                </a>
            </div>

            {{-- Flash succès --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Erreurs de validation --}}
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <p class="font-semibold mb-1">Merci de corriger les erreurs :</p>
                    <ul class="list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Formulaire --}}
            <div class="bg-white shadow-md rounded p-6">
                <form method="POST" action="{{ route('admin.planets.update', $planet) }}" class="space-y-5">
                    @csrf
                    @method('PUT')

                    {{-- Nom --}}
                    <div>
                        <label for="name" class="block text-sm font-medium mb-1">Nom</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $planet->name) }}"
                            class="w-full border rounded px-3 py-2"
                            required
                        >
                        @error('name')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Distance --}}
                    <div>
                        <label for="distance" class="block text-sm font-medium mb-1">Distance</label>
                        <input
                            type="text"
                            id="distance"
                            name="distance"
                            value="{{ old('distance', $planet->distance) }}"
                            class="w-full border rounded px-3 py-2"
                        >
                        @error('distance')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Durée de voyage --}}
                    <div>
                        <label for="travel_time" class="block text-sm font-medium mb-1">Durée de voyage</label>
                        <input
                            type="text"
                            id="travel_time"
                            name="travel_time"
                            value="{{ old('travel_time', $planet->travel_time) }}"
                            class="w-full border rounded px-3 py-2"
                        >
                        @error('travel_time')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Publié --}}
                    <div class="flex items-center gap-2">
                        <input
                            type="checkbox"
                            id="is_published"
                            name="is_published"
                            value="1"
                            @checked(old('is_published', $planet->is_published))
                            class="h-4 w-4"
                        >
                        <label for="is_published" class="text-sm">Publié</label>
                    </div>
                    @error('is_published')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror

                    {{-- Actions --}}
                    <div class="flex items-center justify-end gap-3 pt-2">
                        <a href="{{ route('admin.planets.index') }}" class="px-4 py-2 rounded border">
                            Annuler
                        </a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>

            {{-- Lien suppression (optionnel) --}}
            <div class="mt-6">
                <form action="{{ route('admin.planets.destroy', $planet) }}" method="POST"
                      onsubmit="return confirm('Supprimer définitivement cette planète ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 underline">
                        Supprimer cette planète
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
