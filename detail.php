
<?php require_once('data/data.php');//le code va cherche le tableau data?>
<?php require_once('top.php');//le code va cherche le tableau data?>
<?php require_once('views/banner.php'); ?>
<?php
require_once('data/data.php');
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

<?php require_once('views/video.php'); ?>
<?php require_once('views/forfaits.php'); ?>
<?php require_once ('views/footer.php'); ?>
