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
        <div id="header">
            <h1> AGENCE DE VOYAGE</h1>
            <ul>
                <?php
                // Afficher le menu avec un foreach
                foreach ($menu as $libelle => $url) {
                    echo "<li><a href='$url'>$libelle</a></li>";
                }
                ?>
            </ul>
        </div>

        <h2>Consultez notre catalogue</h2>

<?php
require_once('login_out_form.php');
?>



