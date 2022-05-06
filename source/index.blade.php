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
    </main>
@endsection
