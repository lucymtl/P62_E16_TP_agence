<?php
require_once('defines.php');
require_once('db/conn.php');

$categories = get_categories();
//var_dump($categories);
// Est-ce qu'il y a une categorie (cat_id)  présente dans l'url ?
$cat_id = null; // Initialiser u premier des items
if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
}
$forfaits = get_article_list($cat_id);
//var_dump($forfaits);
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
        foreach ($forfaits as $id => $item) {
        ?>
                <li><a href="detail.php?item_id=<?= $id ?>">
                        <div id = "toto">
                            <p><?= utf8_encode($item['name']) ?>
                                , <span class=".prix"><?= $item['price'] ?></span>
                                , <span class=".categorie"><?= utf8_encode($categories[$item['category_id']]['name']) ?></span>
                            </p>
                            <img src="<?= $item['picture'] ?>" alt=""/>
                        </div>
                    </a>
                </li>
                <?php
        }
        ?>
    </ul>
</div>
<h2>VOTRE PANIER EST VIDE</h2>
<li><a href="accueil.php"/a>Retour a l'accueil</li>



</body>

</html>

