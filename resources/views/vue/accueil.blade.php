<x-layout >
    <x-slot:bgImage>
    {{ asset('images/background-destination.png') }}
    </x-slot:bgImage>
    <x-header>
 
</x-header>
<main class="flex flex-col items-center justify-center min-h-screen text-center text-white px-6">
<p class=" tracking-widest uppercase text-sm mb-4">Donc vous voulez voyagez dans </p>

<h1 class="text-6×1 md:text-8xl font-serif uppercase mb-6">L'ESPACE</h1>

<p class="max-w-md leading-relaxed">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire!</p>
<div class="mt-20">
<a href="destination.blade.php" class="flex items-center justify-center w-40 h-40 rounded-full bg-white text-gray-900 font-semibold text-lg hover:scale-105 transition-transform duration-300">
EXPLORER</a>
</div>

</main>
</x-layout>
