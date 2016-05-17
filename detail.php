<?php
require_once('top.php');//le code va cherche le tableau data
require_once('defines.php');
require_once('db/conn.php');

//    var_dump($_GET);
$id_forfait = 0; // Initialiser au premier des items
if (array_key_exists('item_id', $_GET)) {
    $id_forfait = $_GET['item_id'];
}
// Il faut vérifier que la valeur de l'id est bonne
$forfait = get_article($id_forfait);

$categories = get_categories();

?>
<div id="wrap">
    <div id="panier">
        <?php if (is_null($forfait)) { ?>
            <p>Cet article n'existe pas !</p>
        <?php } else { ?>
            <div>
                <div class="acheter"><?= $forfait['name'] ?> - <?= $forfait['price'] ?></div>
                <div class="button_choix">
                    <ul>
                        <li class="button_choix_txt">Il a <span
                                class="button_choix_valeur"><?= $_SESSION[FORFAIT_CROISIERE] ?></span> forfaits dans le
                            panier
                        </li>
                        <li><a href="<?php echo make_action_url(OP_RETIRER_TOUT, FORFAIT_CROISIERE); ?>"><img
                                    src="images/suprimer.jpg"></a></li>
                    </ul>
                </div>
                <img id="price" width="930px" src="<?= $forfait['photo'] ?>" alt=""/>
                <div class="txt_forfait"><p><?= $forfait['description'] ?></p></div>
                <div class="button_reserver"><a href="<?php echo make_action_url(OP_AJOUTER, FORFAIT_CROISIERE); ?>">Ajouter
                        au panier</a></div>
                <br/>
            </div>
        <?php } ?>

    </div>
</div><?php require_once('views/video.php'); ?>
<?php require_once('views/forfaits.php'); ?></div>

<?php require_once('views/footer.php'); ?>
