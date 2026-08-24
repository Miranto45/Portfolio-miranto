<?php

/*
|--------------------------------------------------------------------------
| TOUTES TES INFOS SONT ICI  -  modifie ce seul fichier dans VS Code
|--------------------------------------------------------------------------
*/

return [
    'full_name' => 'ANDRIAMAHERISON TANTELINIAINA MIRANTO',
    'first_name' => 'Miranto',
    'role' => 'Developpeur Web & Etudiant en Informatique',
    'tagline' => "Je concois des applications web simples, rapides et agreables a utiliser.",
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
        "Ecris ici ton paragraphe de presentation. Parle de ton parcours, de ce que tu aimes construire et de ce que tu recherches.",
        "Deuxieme paragraphe : tes objectifs, ta motivation, le type de projets qui t'interessent.",
    ],

    'stats' => [
        ['value' => 'L3', 'label' => "Niveau d'etudes"],
        ['value' => '6+', 'label' => 'Projets realises'],
        ['value' => '5',  'label' => 'Langages'],
        ['value' => '4',  'label' => 'Frameworks'],
    ],

    'education' => [
        ['title' => 'A remplir - Diplome / Niveau', 'place' => 'Etablissement', 'year' => '2026'],
        ['title' => 'A remplir - Certification', 'place' => 'Organisme', 'year' => '2024'],
        ['title' => 'A remplir - Baccalaureat', 'place' => 'Lycee', 'year' => '2023'],
    ],

    'skills' => [
        ['group' => 'Langages', 'items' => ['PHP', 'Java', 'JavaScript', 'SQL']],
        ['group' => 'Frameworks', 'items' => ['Laravel', 'Spring Boot', 'Bootstrap']],
        ['group' => 'Bases de donnees', 'items' => ['PostgreSQL', 'MySQL', 'SQLite']],
        ['group' => 'Outils', 'items' => ['Git', 'GitHub', 'VS Code', 'Figma']],
    ],

    'projects' => [
        [
            'name' => 'Nom du projet 1',
            'description' => 'Courte description du projet : le probleme resolu et ce que tu as construit.',
            'tags' => ['Laravel', 'MySQL'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
        [
            'name' => 'Nom du projet 2',
            'description' => 'Courte description du projet.',
            'tags' => ['Java', 'PostgreSQL'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
        [
            'name' => 'Nom du projet 3',
            'description' => 'Courte description du projet.',
            'tags' => ['JavaScript'],
            'repo' => 'https://github.com/Miranto45',
            'demo' => '',
        ],
    ],

    'experience' => [
        [
            'title' => 'A remplir - Poste / Stage',
            'company' => 'Entreprise',
            'year' => '2026',
            'points' => ['Tache ou realisation 1', 'Tache ou realisation 2'],
        ],
    ],

    'languages' => [
        ['name' => 'Malagasy', 'level' => 'Langue maternelle'],
        ['name' => 'Francais', 'level' => 'Courant'],
        ['name' => 'Anglais', 'level' => 'Intermediaire'],
    ],

    'interests' => ['A remplir', 'A remplir', 'A remplir'],
];
