<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-technology-desktop.jpg') }}
    </x-slot:bgImage>
    <x-header />
    <main class="flex flex-col items-center justify-start min-h-screen text-center text-white px-6 pt-20">

        <!-- Titre de section -->
        <p class="uppercase tracking-widest text-sm text-blue-200 mb-8">
            <span class="opacity-50 mr-2">03</span> LANCEUR SPATIAL 101
        </p>
          <!-- Image de fusée -->
        <img src="{{ asset('images/image-launch-vehicle-portrait.jpg') }}" alt="Douglas Hurley" class="w-40 h-auto  mb-8">
            <!-- Douglas hurley -->
             <!-- cercle numéroté  -->
     <div id="cercle-numerote" class="flex justify-center items-center gap-6  py-8">
    <!-- cercle actif -->
     <a href="step1" class="flex items-center justify-center w-20 h-20 rounded-full bg-white text-black font-medium text-x1 transition-transform duration-300 hover:scale-105">1</a>
      <!-- Cercle inactif -->
    <a href="#step2" class="flex items-center justify-center w-20 h-20 rounded-full border border-white text-white font-medium text-xl transition-transform duration-300 hover:scale-105">
        2
    </a>
    <a href="#step3" class="flex items-center justify-center w-20 h-20 rounded-full border border-white text-white font-medium text-xl transition-transform duration-300 hover:scale-105">
        3
    </a>
     </div>
   <p class="uppercase tracking-widest text-sm text-blue-200 mb-8">
            <span class="opacity-50 mr-2"></span> La Terminologie.....
        </p>
       <h1 class="text-6×1 md:text-8xl font-serif uppercase mb-6">LE LANCEUR</h1>
<p class="max-w-md text-blue-100 leading-relaxed mb-10">Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !</p>


</x-layout>