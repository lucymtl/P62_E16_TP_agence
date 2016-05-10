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

$data = array(
    0 => array(
        'nom' => "L'atlantique emblématique",
        'categorie' => 'Croisiere',
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images/images-modal/croisiere_01.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    1 => array(
        'nom' => 'Safari',
        'categorie' => 'Aventure',
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => '',
        'dans_carousel' => false,
        'date' => 'd-m-y',
    ),
    2 => array(
        'nom' => 'Motoneige (Charlevoix, Québec)',
        'categorie' => 'Sport d\'hiver',
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images/images-modal/escalade_Husky.jp',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),

    3 => array(
        'nom' => 'Chiens et gîtes du grand nord',
        'categorie' => 'Nature',
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images/images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),

    4 => array(
        'nom' => 'Formule Hotel tout inclus',
        'categorie' => 'Famille',
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'foot.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',

    ),




);


//Pour afficher le tableau
echo '<ul>';
foreach ($data as $categorie => $nom) {
    echo "<li><a href='$categorie'>$nom</a></li>";
}
echo '</ul>';

?>
