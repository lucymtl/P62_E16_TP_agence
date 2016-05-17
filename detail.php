<?php require_once('top.php');//le code va cherche le tableau data?>


<?php
    require_once('data/data.php');
    require_once('data/defines.php');
    //    var_dump($_GET);
    $cat_id = 0; // Initialiser au premier des items
    if (array_key_exists('item_id', $_GET)) {
        $categories_id = $_GET['item_id'];
}
// Il faut vérifier que la valeur de l'id est bonne
$categories = $data[$cat_id];
?>
    <div id="wrap">

        <div id="panier">
            <div >
                <div class="acheter"><?= $categories['nom'] ?> - <?= $categories['prix'] ?></div>
                <div class="button_choix">
                    <ul>
                        <li class="button_choix_txt">Il a <span class="button_choix_valeur"><?= $_SESSION[FORFAIT_CROISIERE] ?></span> forfaits dans le panier</li>
                        <li><a href="<?php echo make_action_url(OP_RETIRER_TOUT, FORFAIT_CROISIERE); ?>"><img src="images/suprimer.jpg"></a></li></ul> </div>

                <img id="price" width="930px" src="<?= $categories['photo'] ?>" alt=""/>
                <div class="txt_forfait"><p><?= $categories['description'] ?></p></div>
                <div class="button_reserver"> <a  href="<?php echo make_action_url(OP_AJOUTER, FORFAIT_CROISIERE); ?>" >Ajouter au panier</a></div><br/>
            </div>


        </div>
    </div><?php require_once('views/video.php'); ?>
<?php require_once('views/forfaits.php'); ?></div>

<?php require_once ('views/footer.php'); ?>
