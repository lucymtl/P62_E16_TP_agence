
<?php
require_once('data/data.php');
require_once('utils/login_out.php');
//    var_dump($_GET);
$cat_id = 0; // Initialiser au premier des items
if (array_key_exists('item_id', $_GET)) {
    $categories_id = $_GET['item_id'];
}
// Il faut vérifier que la valeur de l'id est bonne
$categories = $data[$cat_id];
?>
<?php //require_once ('views/page_top.php'); ?>
    <div id="main">
        <div>
            <p><?= $categories['nom'] ?>, <span class=".prix"><?= $categories['prix'] ?></span></p>
            <img src="<?= $categories['photo'] ?>" alt=""/>
        </div>

        <!--Code html spécifique -->
    </div>
<?php //require_once ('views/page_bottom.php'); ?>




<?php
//    var_dump($_GET);
$cat_id = 0; // Initialiser au premier des items
if (array_key_exists('item_id', $_GET)) {
    $categories_id = $_GET['item_id'];
}
// Il faut vérifier que la valeur de l'id est bonne
$cat_id = get_truc($categories_id);
?>
<?php //require_once ('views/page_top.php'); ?>
<div id="main">
    <?php if (is_null($categories)) { ?>
        <p>Ce truc n'existe pas !</p>
    <?php } else { ?>
        <div>
            <p><?= $categories['name'] ?>, <span class=".prix"><?= $categories['price'] ?></span></p>
            <img src="<?= IMAGE_PATH . '/' . $categories['picture'] ?>" alt=""/>
        </div>
    <?php } ?>
    <!--Code html spécifique -->
</div>
<?php require_once ('views/page_bottom.php'); ?>

