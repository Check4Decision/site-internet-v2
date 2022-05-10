<div class="flex items-center">
    <!-- Logo -->
    <a href="">
        <img src="/assets/images/logo-mini.png" alt="Check4Decision Logo" class="sm:w-14 sm:h-12">
    </a>

    <!-- Mobile menu trigger (hamburger icon) -->
    <button class="ml-auto border border-blue-600 text-blue-600 rounded-full px-4 py-2 sm:hidden" x-on:click="showMobileMenu = !showMobileMenu">
        Menu
    </button>
</div>

<!-- Navigation links -->
<nav class="mt-4 sm:ml-auto sm:mt-0" x-show="showMobileMenu" x-transition.duration.750ms x-transition.scale.origin.top>
    <ul class="flex flex-col items-center gap-6 sm:flex-row">
        <x-navigation-item title="Accueil" />
        <x-navigation-item title="Publications" />
        <x-navigation-item title="Moteur de recherche" />
    </ul>
</nav>
