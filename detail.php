<?php
require_once('defines.php');
require_once('db/conn.php');
//require_once('catalogue.php');
require_once('utils/panier.php');
require_once('utils/login_out.php');
require_once('views/banner.php');

//    var_dump($_GET);
$id_forfait = 0; // Initialiser au premier des items
if (array_key_exists('item_id', $_GET)) {
    $id_forfait = $_GET['item_id'];
}
// Il faut vérifier que la valeur de l'id est bonne
$forfait = get_article($id_forfait);

//$categories = get_categories();

?>
<?php require_once('top.php');?>
<div id="wrap">



    <div id="panier">
        <?php if (is_null($forfait)) { ?>
            <p>Ce forfait  n'existe pas !</p>
        <?php } else { ?>
            <div>
                <div class="acheter"><?= $forfait['name'] ?> - <?= $forfait['price']."$" ?></div>
                <div class="acheter"><?= $forfait['duree'].'jours' ?></div>
                <div class="button_choix">
<!--                    <ul>-->
<!--                        <li class="button_choix_txt">Il a <span-->
<!--                                class="button_choix_valeur">--><?//= $_SESSION[CONN_USER] ?><!--</span> forfaits dans le-->
<!--                            panier-->
<!--                        </li>-->
<!--                        <li><a href="--><?php //echo make_action_url(OP_RETIRER_TOUT, $forfait); ?><!--"><img-->
<!--                                    src="images/suprimer.jpg"></a></li>-->
<!--                    </ul>-->

                    <div id="card_handling"><input type="number" class="card_item_qty" data-card-item-id="<?= $id_forfait ?>" value="<?= array_key_exists( $id_forfait, $panier) ? $panier[$id_forfait][PSESS_CARD_QTY] : 0?>" min="0"/></div>
                    <img src="<?=  $forfait['picture'] ?>" alt=""/>

                </div>
<!--                <img id="price" width="930px" src="--><?//= $id_forfait['picture'] ?><!--" alt=""/>-->
                <div class="txt_forfait"><p><?= $forfait['description'] ?></p></div>
<!--                <div class="button_reserver"><a href="--><?php //echo make_action_url(OP_AJOUTER, $id_forfait); ?><!--">Ajouter-->
<!--                        au panier</a></div>-->
                <br/>
            </div>
        <?php } ?>

    </div>
<!--</div>--><?php //require_once('views/video.php'); ?>
<?php require_once('views/forfaits.php'); ?>
<?php //require_once('views/catalogue.php'); ?><!--</div>-->

<?php require_once('views/footer.php'); ?>


