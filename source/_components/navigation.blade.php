@props(['page'])

<div class="flex flex-col px-5 pt-6 sm:flex-row sm:items-center text-center mx-auto" style="max-width: 80rem;"
    x-data="{ showMenu: true }">
    <div class="flex items-center">
        <!-- Logo -->
        <a href="{{ $page->baseUrl }}">
            <img src="/assets/images/logo-mini.png" alt="Check4Decision Logo" class="sm:w-14 sm:h-12">
        </a>

        <!-- Mobile menu trigger (hamburger icon) -->
        <button
            class="ml-auto border border-gray-700 text-gray-700 bg-white bg-opacity-70 rounded-full px-4 py-2 sm:hidden"
            x-on:click="showMenu = !showMenu">
            Menu
        </button>
    </div>

    <!-- Navigation links -->
    <nav class="mt-4 sm:ml-auto sm:mt-0" x-show="showMenu" x-transition.duration.750ms x-transition.scale.origin.top>
        <ul class="flex flex-col items-center gap-6 sm:flex-row">
            <x-navigation-item href="{{ $page->baseUrl }}">Accueil</x-navigation-item>
            <x-navigation-item href="{{ $page->baseUrl }}/publications">Publications</x-navigation-item>
            <x-navigation-item>Moteur de recherche</x-navigation-item>
        </ul>
    </nav>
</div>
