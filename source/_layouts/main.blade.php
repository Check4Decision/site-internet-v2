<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    @include('_partials.head')
</head>

<body
    class="font-montserrat text-gray-800 antialiased min-h-screen flex flex-col bg-[url(/assets/images/dots.svg)] bg-repeat">
    @section('header')
        <header
            class="relative isolate bg-[url('/assets/images/bg-hero.jpg')] bg-cover bg-center after:absolute after:inset-0 after:-z-10 after:bg-black/80">
            <x-navigation :page="$page" :withBgImage="true" />

            <!-- Hero -->
            <div class="flex flex-col justify-center mx-auto px-5 py-24 md:px-10 md:py-36">
                <div class="max-w-7xl mx-auto">
                    <h1 class="text-[2.4rem] text-center text-sky-600 font-bold sm:text-6xl md:text-7xl">
                        Check4Decision
                    </h1>
                    <p
                        class="max-w-3xl text-gray-300/90 font-semibold text-center mt-5 leading-loose tracking-wider sm:text-lg sm:mx-auto">
                        Projet de recherche qui traite les questions relatives à l'automatisation de
                        la collecte et l'agrégation de données mais aussi de la vérification des faits (fact-checking) dans
                        le
                        contexte web journalistique.
                    </p>

                    <!-- Consortium -->
                    <div class="w-64 grid grid-cols-2 place-items-center gap-6 mx-auto mt-16 sm:w-auto sm:grid-cols-4">
                        <x-consortium src="/assets/images/ut.jpeg" alt="Logo Université Iba Der Thiam de Thiès"
                            title=" Université Iba Der Thiam de Thiès" />
                        <x-consortium src="/assets/images/utt.jpg" alt="Logo Université de Technologie de Troyes"
                            title="Université de Technologie de Troyes" />
                        <x-consortium class="w-28 h-28 bg-white border border-gray-200 rounded-md shadow-md"
                            src="/assets/images/ceamitic.jpg" alt="Logo CEA-MITIC" title="CEA-MITIC" />
                        <x-consortium src="/assets/images/ucao.jpg" alt="Logo Université Catholique de l'Afrique de l'Ouest"
                            title="Université Catholique de l'Afrique de l'Ouest" />
                    </div>
                </div>
            </div>
        </header>
    @show
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
