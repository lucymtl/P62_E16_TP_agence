<?php require_once('data/menu_data.php');?>

    <!-- *********** HEADER ************ -->
    <header>
        <div class="social_media">
            <ul>
                <li><img src="images/fb-icon.png" alt = "Suivez-nous sur facebook" /></li>
                <li><img src="images/youtube-icon.png" alt = "Suivez-nous sur youtube" /></li>
            </ul>
        </div>
        <div class="logo">
            <img src="images/logo-boreale.png" alt = "Suivez-nous sur facebook" />
        </div>
        <div class="menu">
            <ul>
<!--                --><?//= require_once('views/menu.php'); ?>
            </ul>
            <?php require_once('login_out_form.php'); ?>
            <!-- Panier -->
            <details id="card">
                <summary>Votre panier (<span class="card_count"><?= count($panier)?></span>)</summary>
                <ul></ul><!-- Liste des items de panier -->
            </details>

        </div>

    </header>


<!---->
<!--<ul>-->
<!--    <li><a href="index.php">Accueil</a></li>-->
<!--    <li><a href="catalogue.php">Catalogue</a></li>-->
<!--    --><?php //if ($user_is_loggedIn) { ?>
<!--        <li><a href="page_privee.php">Page privée</a></li>-->
<!--    --><?php //} ?>
<!--</ul>-->
<!--<!-- Formulaire de login / logout  -->-->
<?php //require_once('login_out_form.php'); ?>
<!--<!-- Panier -->-->
<!--<details id="card">-->
<!--    <summary>Votre panier (<span class="card_count">--><?//= count($panier)?><!--</span>)</summary>-->
<!--    <ul></ul><!-- Liste des items de panier -->-->
<!--</details>-->