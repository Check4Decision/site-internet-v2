<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    @include('_partials.head')
</head>

<body
    class="font-montserrat text-gray-800 bg-[url(/assets/images/dots.svg)] bg-repeat antialiased min-h-screen flex flex-col">
    <header>
        <x-navigation :page="$page" />
        @yield('hero')
    </header>
    <main class="flex-1">
        @yield('main')
    </main>
    <footer class="bg-gray-50 px-5 pt-8 pb-2 relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center gap-7 sm:flex-row sm:justify-between sm:items-baseline">
                <div class="text-center space-y-2">
                    <img class="mx-auto sm:mx-0" src="/assets/images/logo-mini.png" alt="Logo de Check4Decision"
                        width="82" height="66" loading="lazy" decoding="async">
                    <address class="text-center text-sm font-medium tracking-widest leading-relaxed sm:text-left">
                        Université de Thiès <br>
                        check4decision@univ-thies.sn <br>
                        77 205 17 79 / 76 8748130
                    </address>
                </div>
                <!-- Links -->
                <ul class="flex flex-col items-center gap-3 sm:flex-row">
                    <x-footer-link href="/">
                        Accueil
                    </x-footer-link>
                    <x-footer-link href="/publications">
                        Publications
                    </x-footer-link>
                    <x-footer-link href="https://check4decision.univ-thies.sn/search/" target="_blank">
                        Moteur de recherche
                    </x-footer-link>
                </ul>
            </div>
            <p x-data class="mt-10 text-center text-gray-700">
                Copyright <span x-text="new Date().getFullYear()"></span> &copy; Check4Decision
            </p>
        </div>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.team-carousel').slick({
                appendArrows: $('.carousel-arrows'),
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                speed: 500,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
</body>

</html>
