<?php

$receiving = ('POST' === $_SERVER['REQUEST_METHOD']); // On est en réception des données de formulaire

// nom
$nom = "";
$nom_valide = true;
$nom_msg_validation = '';
if ($receiving && array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom));
    if (!$nom_valide) {
        $nom_msg_validation = "Le nom doit comporter au moins deux lettres";
    }
}

//email
$email = "";
$email_valide = true;
$email_msg_validation = '';
if ($receiving && array_key_exists('email', $_POST)) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email_valide = (1 === preg_match('/\w{1,}/', $email));
    if (!$email_valide) {
        $email_msg_validation = "Le courriel doit comporter au moins deux lettres";
    }
}


$sexe = ""; // Contenu du champ sexe (sexe_h ou sexe_f)
$sexe_valide = true; // Le champ est valide par défaut
$sexe_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le sexe n'est pas coché
if ($receiving) {
    $sexe_valide = array_key_exists('sexe', $_POST)
        && in_array($_POST['sexe'], array('sexe_h', 'sexe_f')); // Le champ est valide par défaut
    if ($sexe_valide) {
        $sexe = $_POST['sexe'];
    } else {
        $sexe_msg_validation = "Le sexe n'est pas indiqué";
    }
}

// forfait //

$forfait = "";
$forfait_valide = true;
$forfait_msg_validation = '';

if ($receiving) {
    $forfait_valide = array_key_exists('forfait', $_POST)
        && in_array($_POST['forfait'], array(
            'Croisiére',
            'Family',
            "Sport d'hiver",
            'Nature'));

    if ($forfait_valide) {
        $forfait = $_POST['forfait'];
    } else {
        $forfait_msg_validation = "Le forfait n'est pas disponible !";
    }
}

// nombre de perseonne //

$Nombre_adultes  = "";
$Nombre_adultes_valide = true;
$Nombre_adultes_msg_validation = '';

if ($receiving) {
    $Nombre_adultes_valide = array_key_exists('Nombre_adultes', $_POST)
        && in_array($_POST['Nombre_adultes'], array(
            '1 personne',
            '2 personnes',
            "3 personnes",
            '4 ou plus'));

    if ($Nombre_adultes_valide) {
        $Nombre_adultes = $_POST['Nombre_adultes'];
    } else {
        $Nombre_adultes_msg_validation = "Le Nombre_adultes doit etre remplis !";
    }
}

// Les champs role
$opitons = "";
$opitons_valide = true;
$opitons_msg_validation = '';
if ($receiving) {
    $opitons_valide = array_key_exists('opitons', $_POST)
        && is_array($_POST['opitons']);
    if ($opitons_valide) {
        $opitons = $_POST['role'];
    } else {
        $opitons_msg_validation = "Aucun opitons n'est sélectionné";
    }
}

// Un champ commentaire (textarea)
$commentaire = ""; // Contenu du champ commentaire
$commentaire_valide = true; // Le champ est valide par défaut
$commentaire_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le commentaire n'est pas suffisamment rempli
if ($receiving) {
    $commentaire_valide = array_key_exists('commentaire', $_POST);
    $commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
    $commentaire_valide = (1 === preg_match('/\w{0,}/', $commentaire));

}
$all= array(

    $nom, $email, $forfait, $sexe, $opitons, $commentaire
);
$all_valide = '';
if ($receiving) {
    $commentaire_valide = $all;
    $pagina = "mail_ok.php";
} else {
    $pagina = "mail_error.php";
}


?>
