@props(['page'])

<div class="flex flex-col max-w-7xl mx-auto px-5 py-2 text-center sm:flex-row sm:items-center">
    <!-- Logo -->
    <a href="/">
        <img src="/assets/images/logo-mini.png" alt="Logo de Check4Decision" class="w-16 h-14" width="64" height="56">
    </a>


    <nav class="mt-4 sm:ml-auto sm:mt-0" x-data="{ showMenu: false }">
        <!-- Mobile menu trigger -->
        <button
            class="absolute top-4 right-5 ml-auto border-2 border-cyan-700 text-sky-700 font-black tracking-wider bg-white bg-opacity-70 rounded-full px-4 py-2 sm:hidden"
            aria-controls="menu" x-bind:aria-expanded="showMenu" x-on:click="showMenu = !showMenu">
            Menu
        </button>

        <!-- Navigation links -->
        <ul id="menu"
            class="absolute left-5 right-5 z-20 hidden flex-col items-start gap-6 p-4 bg-sky-700 shadow-xl shadow-gray-600 rounded-md sm:static sm:flex sm:flex-row sm:pb-0 sm:bg-transparent sm:shadow-none"
            x-bind:class="{ 'hidden': !showMenu, 'flex': showMenu }">
            <li>
                <x-navigation-item href="/" :isActive="$page->linkIsActive('')">
                    Accueil
                </x-navigation-item>
            </li>
            <li>
                <x-navigation-item href="/publications" :isActive="$page->linkIsActive('publications')">
                    Publications
                </x-navigation-item>
            </li>
            <li>
                <x-navigation-item href="https://check4decision.univ-thies.sn/search/" target="_blank">
                    Moteur de recherche
                </x-navigation-item>
            </li>
        </ul>
    </nav>
</div>
