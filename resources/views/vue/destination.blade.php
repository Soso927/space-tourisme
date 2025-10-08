<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
    <x-header />

    <main class="flex flex-col items-center justify-start min-h-screen text-center text-white px-6 pt-20">
        
        <!-- Titre de section -->
        <p class="uppercase tracking-widest text-sm text-blue-200 mb-8">
            <span class="opacity-50 mr-2">01</span> Choisissez votre destination
        </p>

        <!-- Image de la planète -->
        <img src="{{ asset('images/planete-lune.png') }}" alt="Lune" class="w-40 h-40 md:w-72 md:h-72 mb-8">

        <!-- Navigation des planètes -->
        <nav class="flex gap-6 text-sm uppercase tracking-widest mb-6 border-b border-gray-700 pb-2">
            <a href="#" class="border-b-2 border-white pb-1">Lune</a>
            <a href="#" class="text-blue-200 hover:text-white transition">Mars</a>
            <a href="#" class="text-blue-200 hover:text-white transition">Europe</a>
            <a href="#" class="text-blue-200 hover:text-white transition">Titan</a>
        </nav>

        <!-- Nom de la planète -->
        <h1 class="text-5xl md:text-7xl font-serif uppercase mb-4">
            Lune
        </h1>

        <!-- Description -->
        <p class="max-w-md text-blue-100 leading-relaxed mb-10">
            Voyez notre planète comme vous ne l’avez jamais vue auparavant.  
            Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué.  
            Pendant que vous y êtes, plongez-vous dans l’histoire en visitant les sites d’atterrissage de Luna 2 et Apollo 11.
        </p>

        <!-- Séparateur -->
        <div class="w-full max-w-md border-t border-gray-700 mb-6"></div>

        <!-- Informations -->
        <div class="flex flex-col items-center justify-center gap-6 text-sm uppercase tracking-widest text-blue-200">
            <div>
                <p class="mb-2">Distance</p>
                <p class="text-2xl text-white font-serif">384 000 km</p>
            </div>
            <div>
                <p class="mb-2">Durée</p>
                <p class="text-2xl text-white font-serif">3 jours</p>
            </div>
        </div>
    </main>
</x-layout>
