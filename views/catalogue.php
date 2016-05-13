
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
