<?php

//Metre le require once de data.php
//Mettre la boucle pour valider l'adresse url avec le array key exist


?>


<?php
//Affichage du catalogue 5 liens

//Faire affich

if(!is_null($cat_id)){

    echo "<h2>Les items de la categorie".$categorie[$cat_id].<
}
?>
?>

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
                <ul>
                    <li><h2><a href="index.php">Accueil</a></h2></li>
                    <li><h2><a href="categorie.php">Forfaits</a></h2></li>
                    <li><h2><a href="reserver.html">Réserver</a></h2></li>
                </ul>
            </div>

        </header>

        <!-- *********** BANNER ************ -->

        <div id="banner">
            <img src="images/banner-sport_hiver.png" alt="Voyage sur la neige" />
        </div>

        <!-- START BODY -->

        <div id="body">

            <!-- *********** CATEGORIES ************ -->

                <div id="tab_control">
                <div id="header">
                    <ul id="ongles">
                        <li>

                            <div class="ongle">
                                <span>Croisière</span>
                            </div>

                        </li>
                        <li>

                            <div class="ongle">
                                <span>Aventure</span>
                            </div>

                        </li>
                        <li>

                            <div class="ongle">
                                <span>Sports d'hive</span>
                            </div>

                        </li>
                        <li>

                            <div class="ongle">
                                <span>Nature</span>
                            </div>

                        </li>

                    </ul>

                </div>

                <div id="for-categorie">
                    <div class="forfait_categorie">
                        <div class="for-img">
                            <img src="images/cat-img01.jpg" />
                        </div>
                        <div class="for-info">
                            <h3>Tittle</h3>
                            <h4>Infos</h4>
                        </div>
                    </div>
                    <div class="forfait_categorie2">
                        <div class="for-img">
                            <img src="images/cat-img01.jpg" />
                        </div>
                        <div class="for-info">
                            <h3>Tittle</h3>
                            <h4>Infos</h4>
                        </div>

                    </div>

                    <div id="for-categorie">
                        <div class="forfait_categorie">
                            <div class="for-img">
                                <img src="images/cat-img01.jpg" />
                            </div>
                            <div class="for-info">
                                <h3>Tittle</h3>
                                <h4>Infos</h4>
                            </div>
                        </div>
                        <div class="forfait_categorie2">
                            <div class="for-img">
                                <img src="images/cat-img01.jpg" />
                            </div>
                            <div class="for-info">
                                <h3>Tittle</h3>
                                <h4>Infos</h4>
                            </div>

                        </div>
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
              </div>

        </div><!-- END body -->


    </div><!-- END wrap -->
    <footer>
    </footer>

</body>
</html>
