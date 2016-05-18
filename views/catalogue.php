<?php
require_once('../top.php');//le code va cherche le tableau data
require_once('../defines.php');
require_once('../db/conn.php');
require_once('../utils/panier.php');
?>
<!--/*Affichage du catalogue*/-->
<!--// Si il y a une categorie, afficher son nom-->
<div id="body">
            <?php
            if ( ! is_null($forfait)) {
                echo "<h2>Les items de la catégorie " . $forfait['item_id'] . "</h2>";
            }
            ?>
<!-- *********** CATEGORIES ************ -->
<div id="tab_control">
    <div id="header">
        <ul id="ongles">
            <?php foreach ($forfait as $cat_id => $nom) { ?>
                <li><a href="catalogue.php?item_id=<?= $cat_id ?>"><?= $nom ?></a></li>
            <?php } ?>
        </ul>


    </div>

    <div id="for-categorie">
        <div class="forfait_categorie">

            <li><a href="detail.php?item_id=<?= $forfait ?>">
                    <div>
                        <h3><?= $forfait['name'] ?></h3>
                        , <h4 class=".prix"><?= $forfait['price'] ?></h4>
                        , <h4 class=".categorie"><?= $forfait[$item['categorie']] ?></h4>

                        <img src="<?= $forfait['picture'] ?>" alt=""/>
                    </div>
                </a>
            </li>


    </div>



</div><!-- END body -->




