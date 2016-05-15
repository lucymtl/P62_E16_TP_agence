<?php
require_once('data/data.php');//le code va cherche le tableau data
require_once('utils/login_out.php');//Va chercher le login
?>

<?php require_once ('views/header.php')?> <!-- Va cherher le header-->

<?php require_once ('views/page_top.php'); ?>
<div id="main">

        <h2>VOTRE PANIER EST VIDE</h2>
        <?php require_once ('views/login_out_form.php'); ?>

    </div>

</div>
<?php require_once ('views/page_bottom.php'); ?>



