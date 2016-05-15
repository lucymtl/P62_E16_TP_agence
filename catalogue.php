<?php
require_once('data/data.php');
require_once('utils/login_out.php');
// Est-ce qu'il y a une categorie (cat_id)  présente dans l'url ?
$cat_id = null; // Initialiser u premier des items
if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">-->
<style>
    img{
        width :260px;
    }

    #toto{

        background-color:red ;
        width: 500px;

    }

    li{
        list-style-type:none
    }

</style>

</head>


<body>

<?php //require_once ('views/page_top.php'); ?>
<div id="main">
    <!--Code html spécifique -->
    <h1> AGENCE DE VOYAGE</h1>
    <h2>Consultez notre catalogue</h2>

    <?php
    /*Affichage du catalogue*/
    // Si il y a une categorie, afficher son nom
    if ( ! is_null($cat_id)) {
        echo "<h2>Les items de la catégorie " . $categories[$cat_id] . "</h2>";
    }
    ?>

    <ul>
        <?php
        foreach ($data as $id => $item) {
            if (is_null($cat_id) || $item['categorie'] == $cat_id) {
                ?>
                <li><a href="detail.php?item_id=<?= $id ?>">
                        <div id = "toto">
                            <p><?= $item['nom'] ?>
                                , <span class=".prix"><?= $item['prix'] ?></span>
                                , <span class=".categorie"><?= $categories[$item['categorie']] ?></span>
                            </p>
                            <img src="<?= $item['photo'] ?>" alt=""/>
                        </div>
                    </a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>
<h2>VOTRE PANIER EST VIDE</h2>
<li><a href="accueil.php"/a>Retour a l'accueil</li>


</body>

</html>

