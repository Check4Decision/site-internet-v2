@props(['page'])

<div class="flex flex-col px-5 py-2 sm:flex-row sm:items-center text-center mx-auto" style="max-width: 80rem;">
    <!-- Logo -->
    <a href="{{ $page->baseUrl }}/">
        <img src="/assets/images/logo-mini.png" alt="Logo de Check4Decision" class="w-16 h-14">
    </a>


    <nav class="mt-4 sm:ml-auto sm:mt-0" x-data="{ showMenu: false }">
        <!-- Mobile menu trigger (hamburger icon) -->
        <button
            class="absolute top-4 right-5 ml-auto border-2 border-cyan-700 text-sky-700 font-black tracking-wider bg-white bg-opacity-70 rounded-full px-4 py-2 sm:hidden"
            x-on:click="showMenu = !showMenu">
            Menu
        </button>

        <!-- Navigation links -->
        <ul class="items-center gap-6 pb-4 border-b-2 border-gray-200 sm:flex-row sm:pb-0 sm:border-b-0 transform  scale-0 transition-transform ease-out duration-500"
            x-bind:class="{ 'hidden sm:flex sm:scale-100': !showMenu, 'flex flex-col scale-100': showMenu }">
            <x-navigation-item class="{{ $page->link_is_active('') }}" href="{{ $page->baseUrl }}/">
                Accueil
            </x-navigation-item>
            <x-navigation-item class="{{ $page->link_is_active('publications') }}"
                href="{{ $page->baseUrl }}/publications">
                Publications
            </x-navigation-item>
            <x-navigation-item>Moteur de recherche</x-navigation-item>
        </ul>
    </nav>
</div>
