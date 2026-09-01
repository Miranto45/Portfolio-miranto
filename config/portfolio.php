<?php

/*
|--------------------------------------------------------------------------
| TOUTES TES INFOS SONT ICI  -  modifie ce seul fichier dans VS Code
|--------------------------------------------------------------------------
*/

return [
    'full_name' => 'ANDRIAMAHERISON TANTELINIAINA MIRANTO',
    'first_name' => 'Miranto',
    'role' => 'Developpeur Web & Administrateur Reseaux',
    'tagline' => "Solution web fluides et securisees, application web performantes. ",
    'status' => 'Disponible pour un stage',

    'email' => 'mirantoandriamaherison@gmail.com',
    'mail_to' => env('MAIL_TO_ADDRESS', 'mirantoandriamaherison@gmail.com'),
    'phone' => '0382152315',
    'location' => 'Antananarivo, Madagascar',

    'github_user' => 'Miranto45',
    'github_url' => 'https://github.com/Miranto45',
    'linkedin_url' => '',   // <- a remplir
    'facebook_url' => '',   // <- a remplir

    // Photo : remplace public/images/profil.jpg par ta vraie photo (meme nom)
    'photo' => 'images/profil.jpg',

    'about' => [
        "Je suis un etudiant de l'Universite Prive d'Ambohidratrimo,Mon nom complet est ANDRIAMAHERISON Tanteliniana Miranto.J'ai fait toutes mes parcours license: L1,L2 a cette universite est je suis en L3 maintenant    .",
        "J'aime cree different app Web et application mobile avec different outils.J'ai beaucoup d'imagination sur mes creation ,et j'aimerais avoir un job au parcours que j'ai fait ."
    ],

    'stats' => [
        ['value' => 'L3', 'label' => "Niveau d'etudes"],
        ['value' => '5+', 'label' => 'Projets realises'],
        ['value' => '5',  'label' => 'Langages'],
        ['value' => '2',  'label' => 'Frameworks'],
    ],

    'education' => [
        ['title' => 'License L3 - En cours','place' => 'Universite Prive Ambohidratrimo', 'year' => 'ici 2027'],
        ['title' => 'License L2 - Valide','place' => 'Universite Prive Ambohidratrimo', 'year' => '2026'],
        ['title' => 'License L1 - Valide', 'place' => 'Universite Prive Ambohidratrimo', 'year' => '2025'],
        ['title' => 'Baccalaureaont - Valide', 'place' => 'Lycee Prive Saint Mathieu', 'year' => '2024'],
    ],

    'skills' => [
        ['group' => 'Langages', 'items' => ['PHP', 'Python', 'Langage c', 'SQL','Kotlin']],
        ['group' => 'Frameworks', 'items' => ['Laravel', 'Djongo']],
        ['group' => 'Bases de donnees', 'items' => ['MySQL', 'SQLite']],
        ['group' => 'Outils', 'items' => ['Git', 'GitHub', 'VS Code', 'Figma']],
    ],

    'projects' => [
        [
            'name' => 'Gestion scolaire',
            'description' => 'Solution en ligne pour les etudiant pas present en cours.',
            'tags' => ['Laravel', 'MySQL','Laravell'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
        [
            'name' => 'Catalogue produit App',
            'description' => 'Application android pour achats en ligne,fait avec Android studio code et backend laravell.',
            'tags' => ['Laravell', 'Android Studio Code'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
        [
            'name' => 'Table Gasy',
            'description' => 'Meilleurs pour faire des Jeux de table et progresser en jouent avec langue malagasy .',
            'tags' => ['Php'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
    ],

    'experience' => [
        [
            'title' => 'Stage ',
            'company' => 'YAS Madagascar',
            'year' => '2025',
            'points' => ['Stage observation en dev et reseaux', 'Attestation de stage obtenu'],
        ],
    ],

    'languages' => [
        ['name' => 'Malagasy', 'level' => 'Langue maternelle'],
        ['name' => 'Francais', 'level' => 'Courant'],
        ['name' => 'Anglais', 'level' => 'Intermediaire'],
    ],

    'interests' => ['Basket Ball', 'Jeux video', 'Photoshop'],
];
