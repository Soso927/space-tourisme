<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
        <x-header />
        <main class="flex flex-col items-center justify-start min-h-screen text-center text-white px-6 pt-20">

        <!-- Titre de section -->
        <p class="uppercase tracking-widest text-sm text-blue-200 mb-8">
            <span class="opacity-50 mr-2">02</span> Rencontrez l'équipage
        </p>
          <!-- Image de Douglas hurley -->
        <img src="{{ asset('images/image-douglas-hurley.png') }}" alt="Douglas Hurley" class="w-40 h-auto md:w-72 md:h-auto mb-8">
            <!-- Douglas hurley -->
        <h1 class=" tracking-widest uppercase text-sm mb-4">
            Commandant Douglas Hurley
        </h1> 

        <!-- Description -->
        <p class="max-w-md text-blue-100 leading-relaxed mb-10">
            Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.
        </p>


</x-layout>