<?php require_once ('data/defines.php');?>
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
        
        <div class="logo">
            <img src="images/logo-boreale.png" alt = "Suivez-nous sur facebook" />
        </div>
        <div class="menu">
            <ul>
                <?= require_once('views/menu.php'); ?>
            </ul>
        </div>
        <div class="social_media">
            <ul>
                <li><img src="images/fb-icon.png" alt = "Suivez-nous sur facebook" /></li>
                <li><img name="fb" src="images/youtube-icon.png" alt = "Suivez-nous sur youtube" /></li>
            </ul>
        </div>

    </header>
    
