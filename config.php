<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Check4Decision',
    'language' => 'fr',
    'description' => "Check4Decision: Projet de recherche financé par le CEA-MITIC, qui traite les questions relatives à l'automatisation de la collecte et l'agrégation de données mais aussi de la vérification des faits (fact-checking) dans le contexte web journalistique.",
    'collections' => ['axes', 'responsables', 'stagiaires', 'publications'],
    'link_is_active' => function ($page, $section) {
        if (empty($page->getPath()) && empty($section)) { // Page d'accueil path => ''
            return 'text-sky-900';
        }

        return  Str::contains($page->getPath(), $section) ? 'text-sky-900' : '';
    }
];
