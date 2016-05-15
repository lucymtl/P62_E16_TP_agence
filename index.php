<?php
require_once('data/data.php');//le code va cherche le tableau data
require_once('utils/login_out.php');
?>



<?php require_once ('views/header.php')?>







<?php require_once ('views/page_top.php'); ?>
<div id="main">
    <!-- Liens vers les categories du catalogue -->


<!--    <div id="liens_categories">-->
<!--        <ul>-->
<!--            --><?php //foreach ($categories as $cat_id => $categorie) { ?>
<!--                <li><a href="catalogue.php?cat_id=--><?//= $cat_id ?><!--">--><?//= $categorie ?><!--</a></li>-->
<!--            --><?php //} ?>
<!--        </ul>-->

        <h2>VOTRE PANIER EST VIDE</h2>
        <?php require_once ('views/login_out_form.php'); ?>

    </div>
    <!--Code html spécifique -->
</div>
<?php require_once ('views/page_bottom.php'); ?>

