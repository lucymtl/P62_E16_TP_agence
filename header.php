<?php require_once ('data/defines.php');?>

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
                <?= require_once('views/menu.php'); ?>
            </ul>
        </div>

    </header>