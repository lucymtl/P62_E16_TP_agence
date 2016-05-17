<?php
require_once('defines.php');

//require_once ('header.php')?>


</body>

<h1>Bonjour Bienvenue CHEZ AGENCE DE VOYAGE</h1>
<h2>Consultez notre catalogue</h2>

<?php //require_once ('views/page_top.php'); ?>
<div id="main">
    <!-- Liens vers les categories du catalogue -->
    <div id="liens_categories">
        <ul>
            <?php foreach ($forfait as $cat_id => $categorie) { ?>
                <li><a href="catalogue.php?cat_id=<?= $cat_id ?>"><?= $categorie ?></a></li>
            <?php } ?>
        </ul>

        <h2>VOTRE PANIER EST VIDE</h2>

    </div>
    <!--Code html spécifique -->
</div>
<?php //require_once ('views/page_bottom.php'); ?>



</html>