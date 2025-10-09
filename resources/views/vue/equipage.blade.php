<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
        <x-header />{{-- resources/views/equipage.blade.php --}}
{{-- Tailwind 4.1 – full flex, responsive --}}

<main class="min-h-screen bg-[#0B0D17] text-white px-6 pt-20 lg:px-16 lg:pt-28">

  {{-- Conteneur principal (layout flex) --}}
  <div class="max-w-7xl mx-auto flex flex-col-reverse gap-10 lg:gap-16 lg:flex-row lg:items-center lg:justify-between">

    {{-- Colonne gauche : texte --}}
    <section class="w-full lg:w-1/2 flex flex-col gap-8">

      {{-- En-tête de section --}}
      <p class="uppercase tracking-widest text-sm text-blue-200">
        <span class="opacity-50 mr-2">02</span> Rencontrez l’équipage
      </p>

      {{-- Bloc contenu principal (titre + texte) --}}
      <div class="text-center lg:text-left flex flex-col gap-4">
        <p class="uppercase tracking-widest text-xs lg:text-sm text-blue-200">Commandant</p>

        <h1 class="text-4xl md:text-6xl font-serif uppercase">Douglas</h1>

        <p class="max-w-xl text-blue-100 leading-relaxed mx-auto lg:mx-0">
          Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien
          astronaute de la NASA. Il s’est lancé dans l’espace pour la première fois en juillet 2011 en tant que
          pilote de la mission STS-135, le dernier vol de la navette spatiale.
        </p>
      </div>

      {{-- Points de navigation (pagination équipage) --}}
      <div class="flex justify-center lg:justify-start gap-4 mt-6">
        <button class="w-3 h-3 rounded-full bg-white"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white transition"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white transition"></button>
        <button class="w-3 h-3 rounded-full bg-white/30 hover:bg-white transition"></button>
      </div>
    </section>

    {{-- Colonne droite : image équipage --}}
    <aside class="w-full lg:w-1/2 flex justify-center">
      <img
        src="{{ asset('images/image-douglas-hurley.png') }}"
        alt="Douglas Hurley"
        class="w-full max-w-md lg:max-w-[480px] xl:max-w-[520px] h-auto object-contain"
      />
    </aside>

  </div>
</main>


</x-layout>