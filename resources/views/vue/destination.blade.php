<x-layout>
    <x-slot:bgImage>
        {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>

    <x-header />

    <main
        class="min-h-screen text-white     px-4 sm:px-6 md:px-8 lg:px-12   pt-16 sm:pt-20      items-start lg:items-center   gap-10 lg:gap-20  text-center lg:text-left">

        <div id="titresection">
            <!-- 01 — Titre de section -->
            <p
                class="uppercase tracking-[0.3em] text-xs sm:text-sm md:text-base text-blue-200  mb-2 sm:mb-4 lg:mb-8 lg:mt-10     justify-self-center lg:justify-self-start">
                <span class="opacity-50 mr-3">01</span> Choisissez votre destination
            </p>
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-center gap-x-90">
            <div id="planete">
                <!-- Image de la planète -->
                <img src="{{ asset('images/planete-lune.png') }}" alt="Lune"
                    class="w-auto sm:w-56 md:w-72 lg:w-[500px] xl:w-[580px] h-auto    mb-6 sm:mb-8 lg:mb-0  justify-self-center lg:justify-self-start   lg:row-span-6 lg:self-center" />
            </div>


            <!-- Navigation des planètes -->
            <div id="navigationplanete" class="flex flex-col lg:flex-col ">
                <nav
                    class="lg:col-start-2 lg:max-w-xl   flex flex-wrap justify-center lg:justify-start gap-6   text-xs sm:text-sm md:text-base uppercase tracking-[0.2em]    mb-4 sm:mb-6 border-b border-[#383B4B]/80 pb-3">
                    <a href="#" class="relative pb-2 text-white border-b-2 border-white">
                        Lune
                    </a>
                    <a href="#" class="text-blue-200 hover:text-white transition-colors pb-2">Mars</a>
                    <a href="#" class="text-blue-200 hover:text-white transition-colors pb-2">Europe</a>
                    <a href="#" class="text-blue-200 hover:text-white transition-colors pb-2">Titan</a>
                </nav>
                <!-- Nom de la planète -->
                <h1
                    class="lg:col-start-2    font-serif uppercase     text-5xl sm:text-6xl md:text-7xl lg:text-[92px] leading-none    mb-4">
                    Lune
                </h1>

                <!-- Description -->
                <p
                    class="lg:col-start-2  max-w-md lg:max-w-xl mx-auto lg:mx-0 text-blue-100/90 leading-relaxed  text-sm sm:text-base md:text-lg   mb-8">
                    Voyez notre planète comme vous ne l'avez jamais vue auparavant.
                    Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué.
                    Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2
                    et Apollo 11.
                </p>
                <!-- Séparateur -->
                <div
                    class="lg:col-start-2  w-full max-w-md lg:max-w-xl mx-auto lg:mx-0   border-t border-[#383B4B]/80 mb-6">
                </div>

                <!-- Informations -->
                <div
                    class="lg:col-start-2   flex flex-col sm:flex-row items-center lg:items-start  justify-center lg:justify-start gap-8     uppercase tracking-[0.18em] text-blue-200 text-xs sm:text-sm md:text-base">
                    <div class="text-center lg:text-left">
                        <p class="mb-2">Distance</p>
                        <p class="font-serif text-2xl sm:text-3xl md:text-4xl text-white tracking-normal">384 000 km</p>
                    </div>
                    <div class="text-center lg:text-left">
                        <p class="mb-2">Durée</p>
                        <p class="font-serif text-2xl sm:text-3xl md:text-4xl text-white tracking-normal">3 jours</p>
                    </div>
                </div>
            </div>

        </div>

    </main>
</x-layout>
