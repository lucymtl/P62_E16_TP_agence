
<?php
require_once('data/data.php');
// Est-ce qu'il y a une categorie (cat_id)  présente dans l'url ?
$cat_id = null;
if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
}
?>



<?php
foreach ($data as $id => $item) {
if (is_null($cat_id) || $item['categorie'] == $cat_id) {
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">-->

    <style>

        #ongles{

            background-color:red;
        }


    </style>
</head>
<body>
        <div id="body">
            <?php
            /*Affichage du catalogue*/
            // Si il y a une categorie, afficher son nom
            if ( ! is_null($cat_id)) {
                echo "<h2>Les items de la catégorie " . $categories[$cat_id] . "</h2>";
            }
            ?>
                        <ul id="ongles">
                            <?php foreach ($categories as $cat_id => $nom) { ?>
                                <li><a href="catalogue.php?cat_id=<?= $cat_id ?>"><?= $nom ?></a></li>
                            <?php } ?>
                        </ul>

                    <div>
                        <ul>
                        <li><?= $item['nom'] ?></li></ul>
                        , <h3 class=".description"><?= $item['description'] ?></h3>
                        , <h3 class=".prix"><?= $item['prix'] ?></h3>
                        , <h4 class=".categorie"><?= $categories[$item['categorie']] ?></h4>

                        <img src="<?= $item['photo'] ?>" alt=""/>
                    </div>
                </a>

            <?php
            }
            }
            ?>

                </div>


                    </div>





</body>
</html>
