<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-05-09
 * Time: 22:49
 */

/**
 * Tableau principal des données du site
    Il y aura 5 types de forfaits par catégorie
 * - nom
 * - categorie
 * - etc
 */


$categories = array(
    0 => 'Croisiere',
    1 => 'Aventure',
    2 => 'Sport d\'hiver',
    3 => 'Nature',
    4 => 'Famille',
);
//var_dump($categories);



$data = array(
    0 => array(
        'nom' => "L'atlantique emblématique",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    1 => array(
        'nom' => "L'ocean",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_02.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    2 => array(
        'nom' => "Les antilles",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    3 => array(
        'nom' => "La mediterrannée",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    4 => array(
        'nom' => 'Safari0',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    5 => array(
        'nom' => 'Safari1',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),

    6 => array(
        'nom' => 'Safari 2',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),

    7 => array(
        'nom' => 'Safari3',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    8 => array(
        'nom' => 'Safari4',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),



    9 => array(
        'nom' => 'Motoneige 1 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),

    10 => array(
        'nom' => 'Motoneige2 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),

    11 => array(
        'nom' => 'Motoneige3 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    12 => array(
        'nom' => 'Motoneige4 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),



    13 => array(
        'nom' => 'Chiens et gîtes du grand nord1',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    14 => array(
        'nom' => 'Chiens et gîtes du grand nord2',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    15 => array(
        'nom' => 'Chiens et gîtes du grand nord3',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    16 => array(
        'nom' => 'Chiens et gîtes du grand nord4',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),

    17 => array(
        'nom' => 'Formule famille1',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',

    ),

    18 => array(
        'nom' => 'Formule famille 2',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',

    ),

    19 => array(
        'nom' => 'Formulefamille 3',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',

    ),

    20 => array(
        'nom' => 'Formulefamille 4',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',

    ),




);

//var_dump($data);



?>

