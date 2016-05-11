
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

<div id="main">
    <!--Code html spécifique -->


</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

    <div id="wrap">
        <!-- *********** HEADER ************ -->
        <header>
            <div class="social_media">
                <ul>
                    <li><img src="images/fb-icon.png" alt = "Suivez-nous sur facebook" /></li>
                    <li><img src="images/youtube-icon.png" alt = "Suivez-nous sur youtube" /></li>
                </ul>
            </div>
            <div class="logo">
                <img src="images/logo-boreale.png" alt = "Suivez-nous sur facebook" />
            </div>
            <div class="menu">
<!--                --><?php //require_once ('views/menu.php'); ?>
            </div>

        </header>

        <!-- *********** BANNER ************ -->

        <div id="banner">
            <img src="images/banner-sport_hiver.png" alt="Voyage sur la neige" />
        </div>

        <!-- START BODY -->

        <div id="body">
            <?php
            /*Affichage du catalogue*/
            // Si il y a une categorie, afficher son nom
            if ( ! is_null($cat_id)) {
                echo "<h2>Les items de la catégorie " . $categories[$cat_id] . "</h2>";
            }
            ?>
            <!-- *********** CATEGORIES ************ -->

                <div id="tab_control">
                <div id="header">
                        <ul id="ongles">
                            <?php foreach ($categories as $cat_id => $nom) { ?>
                                <li><a href="catalogue.php?cat_id=<?= $cat_id ?>"><?= $nom ?></a></li>
                            <?php } ?>
                        </ul>


                </div>

                <div id="for-categorie">
                    <div class="forfait_categorie">
<!--                        <div class="for-img">-->
<!--                            <img src="images/cat-img01.jpg" />-->
<!--                        </div>-->
<!--                        <div class="for-info">-->
<!--                            <h3>Tittle</h3>-->
<!--                            <h4>Infos</h4>-->
<!--                        </div>-->



                                    <li><a href="detail.php?item_id=<?= $id ?>">
                                            <div>
                                                <h3><?= $item['nom'] ?></h3>
                                                    , <h4 class=".prix"><?= $item['prix'] ?></h4>
                                                    , <h4 class=".categorie"><?= $categories[$item['categorie']] ?></h4>

                                                <img src="<?= $item['photo'] ?>" alt=""/>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                    </div>
<!--                    <div class="forfait_categorie2">-->
<!--                        <div class="for-img">-->
<!--                            <img src="images/cat-img01.jpg" />-->
<!--                        </div>-->
<!--                        <div class="for-info">-->
<!--                            <h3>Tittle</h3>-->
<!--                            <h4>Infos</h4>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div id="for-categorie">-->
<!--                        <div class="forfait_categorie">-->
<!--                            <div class="for-img">-->
<!--                                <img src="images/cat-img01.jpg" />-->
<!--                            </div>-->
<!--                            <div class="for-info">-->
<!--                                <h3>Tittle</h3>-->
<!--                                <h4>Infos</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="forfait_categorie2">-->
<!--                            <div class="for-img">-->
<!--                                <img src="images/cat-img01.jpg" />-->
<!--                            </div>-->
<!--                            <div class="for-info">-->
<!--                                <h3>Tittle</h3>-->
<!--                                <h4>Infos</h4>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
                    <!--<div class="forfait">
                        <div class="for-img">
                            <img src="images/cat-sport_hiver01.jpg" />
                        </div>
                        <div class="for-info">
                            <h2>Tittle</h2>
                            <h3>Infos</h3>
                        </div>
                    </div>
                    <div class="forfait">
                        <div class="for-img">
                            <img src="images/cat-sport_hiver01.jpg" />
                        </div>
                        <div class="for-info">
                            <h2>Tittle</h2>
                            <h3>Infos</h3>
                        </div>
                    </div>-->


              </div>

        </div><!-- END body -->


    </div><!-- END wrap -->
    <footer>
    </footer>

</body>
</html>
