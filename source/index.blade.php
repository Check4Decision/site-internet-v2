@extends('_layouts.main')

@section('title', 'Accueil')

@section('hero')
    <div
        class="flex flex-col gap-24 max-w-7xl min-h-[92vh] px-5 mx-auto mt-10 sm:pt-20 md:flex-row md:items-center md:gap-16 md:mt-0 md:px-10 md:pt-0">
        <!-- Project description -->
        <div class="md:max-w-sm lg:max-w-lg">
            <h1
                class="text-[2.5rem] text-center text-sky-700 font-bold sm:text-6xl md:text-left md:text-[2.5rem] lg:text-6xl">
                Check4Decision
            </h1>
            <p
                class="text-center font-normal mt-5 leading-loose tracking-wider sm:text-lg md:text-left  md:text-base sm:mx-auto sm:mt-8">
                Projet de recherche financé par le
                <abbr title="Centre d'Excellence Africain en Mathématiques, informatique et TIC">CEA-MITIC</abbr>, qui traite
                les questions relatives à l'automatisation de la collecte et l'agrégation de données mais aussi de la
                vérification des faits (fact-checking) dans le contexte web journalistique.
            </p>
        </div>

        <!-- Illustration -->
        <div
            class="relative w-full h-full bg-white px-5 py-10 rounded-lg shadow-md sm:w-[30rem] sm:mx-auto md:h-auto md:w-auto">
            <!-- Blue circle -->
            <div
                class="absolute left-1/2 w-96 h-96 -translate-y-1/3 sm:w-[30rem] sm:h-[30rem] lg:w-[37rem] lg:h-[37rem]  sm:-translate-y-1/4 -z-20 bg-sky-700 rounded-full">
            </div>

            <x-hero-illustration aria-hidden="true" />
        </div>
    </div>
@endsection

@section('main')
    <!-- Consortium -->
    <section class="px-5 py-20 md:px-10">
        <div class="max-w-7xl mx-auto space-y-24">
            <h2 class="text-4xl text-center font-bold sm:text-5xl">Consortium</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28" src="/assets/images/ut.jpeg" alt="Logo Université Iba Der Thiam de Thiès"
                    title=" Université Iba Der Thiam de Thiès" width="112" height="112" loading="lazy"
                    decoding="async">
                <img class="w-28 h-28" src="/assets/images/utt.jpg" alt="Logo Université de Technologie de Troyes"
                    title="Université de Technologie de Troyes" width="112" height="112" loading="lazy"
                    decoding="async">
                <img class="w-28 h-28" src="/assets/images/ceamitic.jpg" alt="Logo CEA-MITIC" title="CEA-MITIC"
                    width="112" height="112" loading="lazy" decoding="async">
                <img class="w-28 h-28" src="/assets/images/ucao.jpg"
                    alt="Logo Université Catholique de l'Afrique de l'Ouest"
                    title="Université Catholique de l'Afrique de l'Ouest" width="112" height="112" loading="lazy"
                    decoding="async">
            </div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="pt-5 pb-20 px-5 md:px-10">
        <div class="max-w-7xl mx-auto space-y-10">
            <h2 class="text-gray-500 text-3xl text-center font-bold">Partenaires</h2>

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
    <section class="px-5 pt-20 py-36 md:px-10">
        <div class="mx-auto space-y-24 max-w-7xl">
            <h2 class="text-3xl text-center text-black font-bold sm:text-5xl">Domaines d'activités</h2>

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
    <section class="bg-sky-700 relative px-5 py-20 md:px-10">
        <div class="max-w-7xl mx-auto space-y-24">
            <h2 class="text-3xl text-white text-center font-bold sm:text-5xl">Axes d'intervention</h2>

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
        <h2 class="text-4xl text-center font-bold sm:text-5xl">Equipe</h2>

        <!-- Responsables -->
        <div class="grid justify-items-center justify-center gap-5 px-5 mt-24 pb-20 mx-auto max-w-7xl md:grid-cols-2">
            @foreach ($responsables as $responsable)
                <x-responsable :image="$responsable->image" :image-alt="$responsable->image_alt" :image-scale="$responsable->image_scale" :image-translate="$responsable->image_translate">
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
        <div class="bg-sky-700 pt-20 pb-10 px-5">
            <x-stagiaires-carousel :stagiaires="$stagiaires" />
        </div>
    </section>
@endsection
