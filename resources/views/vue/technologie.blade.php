<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-technology-desktop.jpg') }}
    </x-slot:bgImage>
    <x-header />
    <main class="min-h-screen bg-[#0B0D17] text-white px-6 pt-20 lg:px-16 lg:pt-28">

  {{-- Conteneur page (flex only) --}}
  <div class="max-w-7xl mx-auto flex flex-col-reverse gap-10 lg:gap-16 lg:flex-row lg:items-center lg:justify-between">

    {{-- Colonne gauche : cercles + titres + texte --}}
    <section class="w-full lg:w-1/2 flex flex-col gap-8">

      {{-- Marqueur de page (03 LANCEUR SPATIAL 101) --}}
      <p class="uppercase tracking-widest text-sm text-blue-200">
        <span class="opacity-50 mr-2">03</span> LANCEUR SPATIAL 101
      </p>

      {{-- Bloc cercles + contenu texte (flex only) --}}
      <div class="flex flex-col lg:flex-row gap-8">

        {{-- Cercles 1/2/3 --}}
        <nav aria-label="Choix de technologie"
             class="flex justify-center lg:justify-start items-center gap-4 lg:flex-col lg:gap-6">
          <a href="#step1"
             class="flex items-center justify-center w-12 h-12 lg:w-16 lg:h-16 rounded-full border border-white/70
                    text-base lg:text-xl font-medium tracking-wide hover:bg-white hover:text-black transition
                    bg-white text-black">
            1
          </a>
          <a href="#step2"
             class="flex items-center justify-center w-12 h-12 lg:w-16 lg:h-16 rounded-full border border-white/70
                    text-base lg:text-xl font-medium tracking-wide hover:bg-white hover:text-black transition">
            2
          </a>
          <a href="#step3"
             class="flex items-center justify-center w-12 h-12 lg:w-16 lg:h-16 rounded-full border border-white/70
                    text-base lg:text-xl font-medium tracking-wide hover:bg-white hover:text-black transition">
            3
          </a>
        </nav>

        {{-- Contenu texte --}}
        <div class="flex-1 text-center lg:text-left flex flex-col gap-4">
          <p class="uppercase tracking-widest text-xs lg:text-sm text-blue-200">La terminologie…</p>

          {{-- ⚠️ corrige bien la classe: text-6xl (et non text-6×1) --}}
          <h1 class="text-4xl md:text-6xl font-serif uppercase">Le lanceur</h1>

          <p class="max-w-xl text-blue-100 leading-relaxed mx-auto lg:mx-0">
            Le lanceur spatial est le véhicule qui propulse une charge utile depuis la surface terrestre
            jusqu’à l’orbite. Il est conçu pour fournir la poussée nécessaire, traverser l’atmosphère
            et placer le vaisseau sur la bonne trajectoire.
          </p>
        </div>
      </div>
    </section>

    {{-- Colonne droite : image (une seule pour toutes tailles) --}}
    <aside class="w-full lg:w-1/2 flex justify-center">
      <img
        src="{{ asset('images/image-launch-vehicle-portrait.jpg') }}"
        alt="Lanceur spatial"
        class="w-full max-w-md lg:max-w-[480px] xl:max-w-[520px] h-auto object-contain"
      />
    </aside>

  </div>
</main>
</x-layout>