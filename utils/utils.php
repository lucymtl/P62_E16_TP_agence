<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-05-10
 * Time: 09:00
 */
?>

<div id ="main">


    <a href="catalogue.php"
</div>
<!--/Faire une constante pour les liens des images-->

<!--//faire une boucle dan l'index pour appeler les categorie faire afficher le catagories spuis forme de liens-->

<?php foreach ($forfait as $cat_id => $nom) { ?>
    <li><a href="catalogue.php?cat_id=<?= $cat_id ?>"><?= $nom ?></a></li>
<?php } ?>};


<!--Fonction pour securiser le formulaire-->
<?php
$nom =$prenom =$pseudo ="";
function securisation($info){
($info) = trim($info);
($info) = stripslashes($info);
($info) = strip_tags($info);
return($info);

    prenom = securisation($_POST['prenom']);
    nom = securisation($_POST['prenom']);
    pseudo = securisation($_POST['prenom']);

    echo "Bonjour " $pseudo !;
}
?>