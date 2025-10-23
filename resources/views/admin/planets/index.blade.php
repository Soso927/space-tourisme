<x-app-layout>
        <x-slot:bgImage>
        {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-4">
                <h2 class="text-2xl font-bold">Gestion des Planètes</h2>
                <a href="{{ route('planets.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Ajouter une planète
                </a>
            </div>
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            <table class="w-full bg-white shadow-md rounded">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2">Nom</th>
                        <th class="px-4 py-2">Distance</th>
                        <th class="px-4 py-2">Durée voyage</th>
                        <th class="px-4 py-2">Publié</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($planets as $planet)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $planet->name }}</td>
                        <td class="px-4 py-2">{{ $planet->distance }}</td>
                        <td class="px-4 py-2">{{ $planet->travel_time }}</td>
                        <td class="px-4 py-2">
                            <span class="px-2 py-1 rounded {{ $planet->is_published ? 'bg-green-200' : 'bg-red-200' }}">
                                {{ $planet->is_published ? 'Oui' : 'Non' }}
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="{{ route('planets.edit', $planet) }}" class="text-blue-600">Modifier</a>
                            <form action="{{ route('planets.destroy', $planet) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Êtes-vous sûr ?')">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $planets->links() }}
            </div>
        </div>
    </div>
</x-app-layout>