<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="wrap">
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
                <li><a href="index.php">Accueil</a></li>
                <li><a href="catalogue.html">Forfaits</a></li>
                <li><a href="reserver.html">Réserver</a></li>
            </ul>
        </div>

    </header>

    <!-- *********** BANNER ************ -->

    <div id="banner">
        <img src="images/banner-sport_hiver.png" alt="Voyage sur la neige" />
    </div>

        <!-- START BODY -->

        <div class="main">

            <!-- *********** SLIDER ************ -->

            <div id="slider" class="fadeslider">
                <div class="slider">
                    <div class="slide">
                        <div class="rabais_img">
                            <a href="catalogue.html?categorie=croisieres"> <img src="images/banner/Caribou.jpg" /></a>
                        </div>
                        <div class="rabais-contenu">
                            <h2>Chiens et gîtes<br/><br/><br/>du grand nord</h2>
                            <h3>14 jours</h3>
                        </div>
                        <div class="rabais-prix">
                            <h1 class="prix">7920$</h1>
                            <p>par personne</p>
                        </div>

                    </div>

                    <div class="slide">
                        <div class="rabais_img">
                            <a href="catalogue.html?categorie=nature"><img src="images/banner/automne.jpg" /></a>
                        </div>
                        <div class="rabais-contenu">
                            <h2>Capitales<br/><br/><br/>scandinaves</h2>
                            <h3>9 jours</h3>
                        </div>
                        <div class="rabais-prix">
                            <h1 class="prix">127$</h1>
                            <p>par personne</p>
                        </div>

                    </div>
                    <div class="slide">
                        <div class="rabais_img">
                            <a href="catalogue.html?categorie=Sports_hiver"><img src="images/banner/aventure_01.jpg" /></a>
                        </div>
                        <div class="rabais-contenu">
                            <h2>L’atlantique <br/><br/><br/> emblématique</h2>
                            <h3>3 jours</h3>
                        </div>
                        <div class="rabais-prix">
                            <h1 class="prix">6890$</h1>
                            <p>par personne</p>
                        </div>

                    </div>

                    <div class="slidenext">></div>
                    <div class="slideback"><</div>
                    <div class="slidelist"></div>

                </div>


            </div><!-- END slider -->
            <div id="video">

                <hr>
                <div class="video-background"></div>
                <div class="video-box">
                    <div class="video-close-lightbox"><h4>FERMER</h4> <img src="images/cancel-solid-icon.png" /></div>
                        <iframe width="960" height="540" src="https://www.youtube.com/embed/4i54XAO6AIA" frameborder="0" allowfullscreen></iframe>
                    </div>
                <div class="video-conteudo">
                    <a href="#" class="video-lightbox"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br/>In ac luctus dolor. Vestibulum enim ipsum, <br/>fringilla ut sagittis nec, egestas a dui.</p>
                    <img class="video-play" src="images/play.png" /></a>

                </div>


            </div><!-- END video -->


            <!-- *********** CATEGORIES ************ -->

            <div id="categories">
                <hr>
                <div id="for-content">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    <p> In ac luctus dolor. Vestibulum enim ipsum, fringilla ut sagittis nec, <br/>egestas a dui. Suspendisse pellentesque ante tempus imperdiet volutpat.</p>
                    <div class="forfait">
                        <div class="for-img">
                            <a href="catalogue.html?categorie=croisieres"><img src="images/cat-nature01.jpg" /></a>
                        </div>
                        <div class="for-info">
                            <a href="catalogue.html?categorie=croisieres"><h3>Capitales scandinaves</h3></a>
                            <h4>20 jours</h4>
                        </div>
                    </div>
                    <div class="forfait2">
                        <div class="for-img">
                            <a href="catalogue.html?categorie=croisieres"><img src="images/cat-croisiere01.jpg" /></a>
                        </div>
                        <div class="for-info">
                            <a href="catalogue.html?categorie=croisieres"><h3>Via ferrata des glaces</h3></a>
                            <h4>10 jours</h4>
                        </div>
                    </div>

                    <div class="forfait2">
                        <div class="for-img">
                            <a href="catalogue.html?categorie=Sports_hiver"><img src="images/cat-sport_hiver01.jpg" /></a>
                        </div>
                        <div class="for-info">
                            <a href="catalogue.html?categorie=Sports_hiver"><h3>Croisière des ours blancs</h3></a>
                            <h4>10 jours</h4>
                        </div>
                    </div>

                </div>
            </div><!-- END categories -->
       </div><!-- END body -->


    </div><!-- END wrap -->
    <footer>
    </footer>
    <script type="text/javascript" src="script/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="script/main.js"></script>
</body>
</html>