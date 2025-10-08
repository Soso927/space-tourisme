<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
    <x-header>
 
</x-header>
<main class="flex flex-col items-center justify-center min-h-[80vh] text-center text-white px-4 sm:px-6 md:px-8 py-12">
  <p class="tracking-widest uppercase text-xs sm:text-sm mb-3 sm:mb-4">
    Donc vous voulez voyager dans
  </p>

  <h1 class="font-serif uppercase mb-4 sm:mb-6 text-4xl sm:text-6xl md:text-8xl">
    L'ESPACE
  </h1>

  <p class="max-w-prose sm:max-w-lg md:max-w-xl leading-relaxed text-sm sm:text-base">
    Soyons objectifs : si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci.
    Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire !
  </p>

  <div class="mt-12 sm:mt-16 md:mt-20">
    <a href="destination.blade.php"
       class="flex items-center justify-center rounded-full bg-white text-gray-900 font-semibold transition-transform duration-300
              w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 hover:scale-105">
      EXPLORER
    </a>
  </div>
</main>

</x-layout>
