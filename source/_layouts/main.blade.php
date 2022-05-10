<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>Check4Decision - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-inter antialiased bg-white">
    <header class="flex flex-col px-4 pt-6 sm:flex-row sm:items-center" x-data="{ showMobileMenu: false }">
        <x-navigation />
    </header>
    @yield('main')
    <footer class="bg-gray-100 px-4 py-8">
        <div class="flex flex-col items-center gap-7 sm:flex-row sm:justify-between sm:items-baseline">
            <div class="text-center space-y-2">
                <img class="mx-auto sm:mx-0" src=" /assets/images/logo-mini.png" alt="Logo de Check4Decision">

                <address class="text-center text-gray-700 sm:text-left text-sm">
                    Université de Thiès <br>
                    check4decision@univ-thies.sn <br>
                    77 205 17 79 / 76 8748130
                </address>
            </div>

            <!-- Links -->
            <ul class="flex flex-col items-center gap-3 sm:flex-row">
                <x-navigation-item title="Accueil" />
                <x-navigation-item title="Publications" />
                <x-navigation-item title="Moteur de recherche" />
            </ul>
        </div>

        <p x-data class="mt-10 text-center">
            Copyright <span x-text="new Date().getFullYear()"></span> &copy; Check4Decision
        </p>
    </footer>
</body>

</html>
