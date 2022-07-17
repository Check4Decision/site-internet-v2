@extends('_layouts.main')

@section('title', 'Accueil')

@section('main')
    <!-- Hero section -->
    <section class="flex flex-col justify-center mx-auto px-5 py-24 md:px-10 md:py-36">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-[2.4rem] text-center text-sky-600 font-bold sm:text-6xl md:text-7xl">
                Check4Decision
            </h1>
            <p
                class="max-w-3xl text-gray-700 font-medium text-center mt-5 leading-loose tracking-wider sm:text-lg sm:mx-auto">
                Projet de recherche financé par le CEA-MITIC, qui traite les questions relatives à l'automatisation de
                la collecte et l'agrégation de données mais aussi de la vérification des faits (fact-checking) dans le
                contexte web journalistique.
            </p>

            <!-- Consortium -->
            <div class="w-64 grid grid-cols-2 place-items-center gap-6 mx-auto mt-16 sm:w-auto sm:grid-cols-4">
                <img class="w-28 h-28 bg-white border border-gray-200 rounded-md shadow-md" src="/assets/images/ut.jpeg"
                    alt="Logo Université Iba Der Thiam de Thiès" title=" Université Iba Der Thiam de Thiès" width="112"
                    height="112" decoding="async">
                <img class="w-28 h-28 bg-white border border-gray-200 rounded-md shadow-md" src="/assets/images/utt.jpg"
                    alt="Logo Université de Technologie de Troyes" title="Université de Technologie de Troyes"
                    width="112" height="112" decoding="async">
                <img class="w-28 h-28 bg-white border border-gray-200 rounded-md shadow-md"
                    src="/assets/images/ceamitic.jpg" alt="Logo CEA-MITIC" title="CEA-MITIC" width="112" height="112"
                    decoding="async">
                <img class="w-28 h-28 bg-white border border-gray-200 rounded-md shadow-md" src="/assets/images/ucao.jpg"
                    alt="Logo Université Catholique de l'Afrique de l'Ouest"
                    title="Université Catholique de l'Afrique de l'Ouest" width="112" height="112" decoding="async">
            </div>
        </div>
    </section>

    <!-- A propos -->
    <section class="bg-sky-600/80 font-medium px-5 py-20 md:px-10">
        <h2 class="sr-only">A propos</h2>

        <div class="mx-auto max-w-7xl space-y-5 text-white">
            <p>
                Ce projet de recherche vise à analyser dans quelle mesure le fact-checking, en tant que genre journalistique
                est
                automatisable. En d’autres termes, à proposer aux fact-checkers un ensemble d’outils d’aide à la
                vérification des faits. Ces outils permettront entre autre de faciliter collecte et l’analyse des données
                web, la vérification des informations mais aussi la visualisation des résultats.
            </p>
            <p>
                Ces transformations se situent dans notre volonté de proposer une nouvelle façon d’exercer le métier de
                journalisme par l'intégration des innovations technologiques actuelles. L’intérêt de ce projet réside non
                seulement dans son positionnement scientifique innovant, mais aussi et surtout dans le fait qu’il intègre
                une approche sociétale de la question de la gestion de l’information.
            </p>
            <p>
                Il a pour ambition d’apporter une solution automatisée d’aide à la décision face à l’accroissement des
                sources
                d’information et la saturation des canaux habituels de fact-checking. Le but est alors de mettre en place
                une plateforme commune de collecte et d’agrégation de données intégrant un moteur de fact-checking combinant
                l’exploration de différentes sources de données.
            </p>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="py-20 px-5 md:px-10">
        <div class="max-w-7xl mx-auto space-y-24">
            <x-section-title>Partenaires</x-section-title>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28 grayscale" src="/assets/images/ugb.jpg" alt="Logo Université Gaston Berger"
                    title="Gaston Berger" width="112" height="112" loading="lazy" decoding="async">
                <img class="w-28 h-28 grayscale" src="/assets/images/aims.jpg" alt="Logo AIMS Sénégal" title="AIMS Sénégal"
                    width="112" height="112" loading="lazy" decoding="async">
                <img class="w-28 h-28 grayscale" src="/assets/images/dsi_ut.jpg" alt="Logo DSI de l'Université de Thiès"
                    title="DSI de l'Université de Thiès" width="112" height="112" loading="lazy" decoding="async">
                <img class="w-28 h-28 grayscale" src="/assets/images/uasz.jpg" alt="Logo Université Assane Seck"
                    title="Université Assane Seck" width="112" height="112" loading="lazy" decoding="async">
            </div>
        </div>
    </section>

    <!-- Domaines d'activités -->
    <section class="px-5 py-20 md:px-10">
        <div class="mx-auto space-y-24 max-w-7xl">
            <x-section-title>Domaines d'activités</x-section-title>

            <div class="grid grid-cols-2 gap-16 sm:grid-cols-3">
                <x-domain icon="database">
                    Data Journalism
                </x-domain>
                <x-domain icon="badge-check">
                    Fact Checking
                </x-domain>
                <x-domain icon="variable">
                    Algorithme et Modélisation
                </x-domain>
                <x-domain icon="translate">
                    Traitement Automatique de la Langue
                </x-domain>
                <x-domain icon="share">
                    Intelligence Artificielle
                </x-domain>
                <x-domain icon="beaker">
                    Data Science
                </x-domain>
            </div>
        </div>
    </section>

    <!-- Axes d'intervention -->
    <section class="relative px-5 py-20 md:px-10">
        <div class="max-w-7xl mx-auto space-y-24">
            <x-section-title>
                Axes d'intervention
            </x-section-title>

            <div class="grid grid-cols-1 place-items-center items-stretch gap-14 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($axes as $axe)
                    <x-axe :icon="$axe->icon">
                        <x-slot name="title">
                            {{ $axe->title }}
                        </x-slot>

                        <!-- Remove p tags -->
                        {{ \Illuminate\Support\Str::between($axe->getContent(), '<p>', '</p>') }}
                    </x-axe>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Membres de l'équipe-->
    <section class="pt-20">
        <x-section-title>
            Equipe
        </x-section-title>

        <!-- Responsables -->
        <div class="grid justify-items-center justify-center gap-5 px-5 mt-24 pb-20 mx-auto max-w-7xl md:grid-cols-2">
            @foreach ($responsables as $responsable)
                <x-responsable :image="$responsable->image" :image-alt="$responsable->image_alt">
                    <x-slot name="name">
                        {{ $responsable->name }}
                    </x-slot>

                    <x-slot name="jobTitle">
                        {{ $responsable->job_title }}
                    </x-slot>

                    <!-- Remove p tags -->
                    {{ \Illuminate\Support\Str::between($responsable->getContent(), '<p>', '</p>') }}
                </x-responsable>
            @endforeach
        </div>

        <!-- Stagiaires -->
        <div class="bg-sky-600/80 pt-20 pb-10 px-5">
            <x-stagiaires-carousel :stagiaires="$stagiaires" />
        </div>
    </section>
@endsection
