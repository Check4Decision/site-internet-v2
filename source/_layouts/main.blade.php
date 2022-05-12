<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }} - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Nunito:wght@300;400;600;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="font-nunito antialiased bg-white">

    <header class="relative bg-gradient-to-l from-transparent to-gray-100">
        <x-background-pattern />
        <x-navigation :page="$page" />
        @yield('hero')
    </header>
    <main>
        @yield('main')
    </main>
    <footer class="bg-gray-100 px-5 pt-8 pb-2 relative">
        <div class="mx-auto" style="max-width: 80rem;">
            <div class="flex flex-col items-center gap-7 sm:flex-row sm:justify-between sm:items-baseline">
                <div class="text-center space-y-2">
                    <img class="mx-auto sm:mx-0" src=" /assets/images/logo-mini.png" alt="Logo de Check4Decision">
                    <address class="text-center tracking-widest leading-relaxed text-gray-700 sm:text-left text-sm">
                        Université de Thiès <br>
                        check4decision@univ-thies.sn <br>
                        77 205 17 79 / 76 8748130
                    </address>
                </div>
                <!-- Links -->
                <ul class="flex flex-col items-center gap-3 sm:flex-row">
                    <x-footer-link href="{{ $page->baseUrl }}">Accueil</x-footer-link>
                    <x-footer-link href="{{ $page->baseUrl }}/publications">Publications</x-footer-link>
                    <x-footer-link>Moteur de recherche</x-footer-link>
                </ul>
            </div>
            <p x-data class="mt-10 text-center text-gray-700">
                Copyright <span x-text="new Date().getFullYear()"></span> &copy; Check4Decision
            </p>
        </div>
    </footer>
</body>

</html>
