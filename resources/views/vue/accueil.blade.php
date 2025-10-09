<x-layout>
    <x-slot:bgImage>
        {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
    
    <x-header></x-header>
<main class=" font-bellefair flex flex-col items-center justify-center min-h-[80vh] text-center text-white px-4 mobile:px-6 tablet:px-8 desktop:px-12 py-12">
    <!-- Section Titre -->
    <div class="space-y-4 mobile:space-y-6 tablet:space-y-8 desktop:space-y-12 max-w-[1200px] mx-auto">
        <p class="tracking-widest uppercase text-xs mobile:text-sm tablet:text-base">
            Donc vous voulez voyager dans
        </p>
        
        <h1 class="font-serif uppercase mb-4 mobile:mb-6 tablet:mb-8 desktop:mb-12 text-4xl mobile:text-5xl tablet:text-6xl desktop:text-8xl">
            L'ESPACE
        </h1>
    </div>

    <!-- Section Paragraphe -->
    <div class="max-w-prose mx-auto py-8 mobile:py-10 tablet:py-12 desktop:py-16">
        <p class="leading-relaxed text-sm mobile:text-base tablet:text-lg desktop:text-xl">
            Soyons objectifs : si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci.<br>
            Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire !
        </p>
    </div>

    <!-- Section Bouton -->
    <div class="mt-12 mobile:mt-16 tablet:mt-20 desktop:mt-24">
        <a href="destination.blade.php"
           class="flex items-center justify-center rounded-full bg-white text-gray-900 font-semibold transition-transform duration-300
                  w-24 h-24 mobile:w-32 mobile:h-32 tablet:w-40 tablet:h-40 hover:scale-105">
            EXPLORER
        </a>
    </div>
</main>
</x-layout>