<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-05-09
 * Time: 22:49
 */
<?php
/**
 * Tableau principal des données du site
 * Les clefs des items sont leurs "id" (un numéro)
 * (suivant le projet) Chaque item doit contenir au minimum les champs suivants
 * - nom
 * - categorie
 * - etc
 */

$data = array(
    0 => array(
        'nom' => 'Trekking',
        'categorie' => 'Croisiere',
        'prix' => 1899.99,
        'photo' => 'toto.jpg',
        'dans_carousel' => true,
    ),
    1 => array(
        'nom' => 'Robots',
        'categorie' => 'Aventure',
        'prix' => 489.99,
        'photo' => 'kiki.jpg',
        'dans_carousel' => false,
    ),
    2 => array(
        'nom' => 'Football',
        'categorie' => 'Sport d\'hiver',
        'prix' => 88.00,
        'photo' => 'foot.jpg',
        'dans_carousel' => true,
    ),

    3 => array(
        'nom' => 'Football',
        'categorie' => 'Nature',
        'prix' => 88.00,
        'photo' => 'foot.jpg',
        'dans_carousel' => true,
    ),

    4 => array(
        'nom' => 'Football',
        'categorie' => 'Famille',
        'prix' => 88.00,
        'photo' => 'foot.jpg',
        'dans_carousel' => true,
    ),




);

echo '<ul>';
foreach ($data as $categorie => $nom) {
    echo "<li><a href='$categorie'>$nom</a></li>";
}
echo '</ul>';

?>
