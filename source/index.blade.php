@extends('_layouts.main')

@section('title', 'Accueil')

@section('main')
    <main class="px-4 py-28">
        <!-- Project description -->
        <section class="grid place-items-center">
            <h1 class="project-title sm:text-7xl font-oxygen font-bold">Check4Decision</h1>
            <p class="text-sm text-gray-600 text-center mt-4 leading-loose tracking-wider project-description sm:text-lg">
                Projet de recherche financé par le CEA-MITIC, qui traite les questions relatives à l'automatisation de la
                collecte et l'agrégation de données mais aussi de la vérification des faits (fact-checking) dans le contexte
                web journalistique.
            </p>

            <!-- Domaines d'activités -->
            <div class="grid grid-cols-2 mt-20 gap-6 sm:grid-cols-3 lg:grid-cols-6">
                <x-domain icon="data-journalism">Data Journalism</x-domain>
                <x-domain icon="fact-checking">Fact Checking</x-domain>
                <x-domain icon="algorithme">Algorithme et Modélisation</x-domain>
                <x-domain icon="traitement-langue">Traitement Automatique de la Langue</x-domain>
                <x-domain icon="intelligence-artificielle">Intelligence Artificielle</x-domain>
                <x-domain icon="data-science">Data Science</x-domain>
            </div>
        </section>

        <!-- Consortium -->
        <section class="text-center mt-20 space-y-10">
            <h2 class="text-3xl sm:text-5xl font-oxygen font-bold">Consortium</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28" src="/assets/images/ut.png" alt="Logo Université de Thiès">
                <img class="w-28 h-28" src="/assets/images/utt.png" alt="Logo Université de Technologie de Troyes">
                <img class="w-28 h-28" src="/assets/images/ceamitic.png" alt="Logo CEA-MITIC">
                <img class="w-28 h-28" src="/assets/images/ucao.png"
                    alt="Logo Université Catholique de l'Afrique de l'Ouest">
            </div>
        </section>

        <!-- Partenaires -->
        <section class="text-center mt-5 space-y-10">
            <h2 class="font-oxygen text-gray-500 text-2xl font-bold">Partenaires</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28 filter-grayscale" src="/assets/images/ugb.png" alt="Logo Gaston Berger">
                <img class="w-28 h-28 filter-grayscale" src="/assets/images/aims.png" alt="Logo AIMS Sénégal">
                <img class="w-28 h-28 filter-grayscale" src="/assets/images/dsi_ut.png"
                    alt="Logo DSI de l'Université de Thiès">
                <img class="w-28 h-28 filter-grayscale" src="/assets/images/uasz.png" alt="Logo Université Assane Seck">
            </div>
        </section>

        <!-- Axes d'intervention -->
        <section class="text-center mt-20 space-y-10">
            <h2 class="text-3xl sm:text-5xl font-oxygen font-bold">Axes d'intervention</h2>
            <div class="grid grid-cols-1 place-items-center items-stretch gap-6 lg:grid-cols-2 xl:grid-cols-3">
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
        </section>

        <!-- Axes d'intervention -->
        <section class="text-center mt-20 space-y-10">
            <h2 class="text-3xl sm:text-5xl font-oxygen font-bold">Equipe</h2>

            <!-- Responsables -->
            <div class="grid justify-items-center mx-auto gap-7 md:grid-cols-2 md:max-w-3xl">
                @foreach ($responsables as $responsable)
                    <x-team-member :image="$responsable->image" :image-alt="$responsable->image_alt" :image-scale="$responsable->image_scale" :image-translate="$responsable->image_translate">
                        <x-slot name="name">
                            {{ $responsable->name }}
                        </x-slot>

                        <x-slot name="jobTitle">
                            {{ $responsable->job_title }}
                        </x-slot>

                        <!-- Remove p tags -->
                        {{ \Illuminate\Support\Str::between($responsable->getContent(), '<p>', '</p>') }}
                    </x-team-member>
                @endforeach
            </div>

            <!-- Stagiaires -->
            <div>
            </div>
        </section>
    </main>
@endsection
