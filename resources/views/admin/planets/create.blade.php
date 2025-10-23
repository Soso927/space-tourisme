{{-- resources/views/admin/planets/create.blade.php --}}
<x-app-layout>
    <x-slot:bgImage>
        {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>

    <div class="py-12">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="text-2xl font-bold">Ajouter une planète</h2>
                <a href="{{ route('planets.index') }}" class="text-blue-600">← Retour à la liste</a>
            </div>

            <div class="rounded bg-white p-6 shadow">
                <form
                    action="{{ route('planets.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-6"
                >
                    @csrf

                    <x-admin.planets._form />
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
