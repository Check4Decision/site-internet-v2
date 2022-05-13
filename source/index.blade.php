@extends('_layouts.main')

@section('title', 'Accueil')

@section('hero')
    <!-- Project description -->
    <div class="flex flex-col justify-around items-center min-h-screen">
        <div>
            <h1
                class="text-title sm:text-7xl lg:text-8xl font-koulen tracking-wider text-center bg-clip-text text-transparent bg-gradient-to-r from-sky-900 via-cyan-600 to-sky-900">
                Check4Decision
            </h1>

            <p class="text-sm text-gray-700 font-light text-center mx-5 sm:mx-auto mt-4 leading-loose tracking-wider sm:text-lg"
                style="max-width: 50rem;">
                Projet de recherche financé par le CEA-MITIC, qui traite les questions relatives à l'automatisation de
                la collecte et l'agrégation de données mais aussi de la vérification des faits (fact-checking) dans le
                contexte web journalistique.
            </p>
        </div>

        <!-- Domaines d'activités -->
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-6 mx-5 xl:mx-auto" style="max-width: 80rem;">
            <x-domain icon="database">Data Journalism</x-domain>
            <x-domain icon="badge-check">Fact Checking</x-domain>
            <x-domain icon="variable">Algorithme et Modélisation</x-domain>
            <x-domain icon="translate">Traitement Automatique de la Langue</x-domain>
            <x-domain icon="share">Intelligence Artificielle</x-domain>
            <x-domain icon="breaker">Data Science</x-domain>
        </div>
    </div>
@endsection

@section('main')
    <!-- Consortium -->
    <section class="text-center pt-10 pb-20">
        <div class="mx-auto space-y-24" style="max-width: 50rem;">
            <h2 class="text-4xl sm:text-5xl font-koulen text-sky-900 tracking-wider">Consortium</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28" src="/assets/images/ut.png" alt="Logo Université de Thiès">
                <img class="w-28 h-28" src="/assets/images/utt.png" alt="Logo Université de Technologie de Troyes">
                <img class="w-28 h-28" src="/assets/images/ceamitic.png" alt="Logo CEA-MITIC">
                <img class="w-28 h-28" src="/assets/images/ucao.png"
                    alt="Logo Université Catholique de l'Afrique de l'Ouest">
            </div>
        </div>
    </section>

    <!-- Partenaires -->
    <section class="text-center pt-5 pb-20">
        <div class="mx-auto space-y-10" style="max-width: 50rem;">
            <h2 class="text-gray-400 text-2xl font-koulen tracking-wider">Partenaires</h2>

            <div class="grid grid-cols-2 place-items-center gap-6 sm:grid-cols-4">
                <img class="w-28 h-28" style="filter: grayscale(100%);" src="/assets/images/ugb.png"
                    alt="Logo Gaston Berger">
                <img class="w-28 h-28" style="filter: grayscale(100%);" src="/assets/images/aims.png"
                    alt="Logo AIMS Sénégal">
                <img class="w-28 h-28" style="filter: grayscale(100%);" src="/assets/images/dsi_ut.png"
                    alt="Logo DSI de l'Université de Thiès">
                <img class="w-28 h-28" style="filter: grayscale(100%);" src="/assets/images/uasz.png"
                    alt="Logo Université Assane Seck">
            </div>
        </div>
    </section>

    <!-- Axes d'intervention -->
    <section class="text-center py-20 px-5 bg-gradient-to-br from-cyan-800 to-sky-800">
        <div class="mx-auto space-y-24" style="max-width: 80rem;">
            <h2 class="text-3xl sm:text-5xl font-koulen text-white tracking-wider">Axes d'intervention</h2>

            <div class="grid grid-cols-1 place-items-center items-stretch gap-14 lg:grid-cols-2 xl:grid-cols-3">
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
    <section class="text-center pt-20 relative bg-gradient-to-br from-transparent via-gray-100 to-white">
        <x-background-pattern />
        <h2 class="text-4xl sm:text-5xl font-roboto-slab font-koulen text-sky-900 tracking-wider">Equipe</h2>

        <!-- Responsables -->
        <div class="grid justify-items-center mx-auto gap-10 md:grid-cols-2 md:max-w-3xl w-full mt-24">
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
        <div class="bg-gradient-to-br from-cyan-800 to-sky-800 pt-1 pb-16 mt-7">
            <x-stagiaires-carousel :stagiaires="$stagiaires" />
        </div>
    </section>
@endsection
