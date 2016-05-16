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



?>

<?php

/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-05-09
 * Time: 22:49
 */
/**
 * Tableau principal des données du site
Il y aura 5 types de forfaits par catégorie
 * - nom
 * - categorie
 * - etc
 */
$categories = array(
    0 => 'Croisiere',
    1 => 'Aventure',
    2 => 'Sport d\'hiver',
    3 => 'Nature',
    4 => 'Famille',
);
//var_dump($categories);
$data = array(
    0 => array(
        'nom' => "L'atlantique emblématique",
        'categorie' => 0,
        'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula fermentum nisi quis luctus. Maecenas sit amet orci urna. Mauris et commodo nunc. Donec lacinia quis metus sed cursus. Aliquam efficitur augue ut velit elementum convallis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent malesuada urna commodo justo pretium, ut rutrum elit vestibulum.
                          ",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images/images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    1 => array(
        'nom' => "L'ocean",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_02.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    2 => array(
        'nom' => "Les antilles",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    3 => array(
        'nom' => "La mediterrannée",
        'categorie' => 0,
        'description' => "Le produit 1 bla bla bla...",
        'duree' =>14,
        'prix' => 1899.99,
        'photo' => 'images-modal/croisiere_01.jpg',
        'dans_carousel' => '',
        'date' => ('d-m-y'),
    ),
    4 => array(
        'nom' => 'Safari0',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    5 => array(
        'nom' => 'Safari 1',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    6 => array(
        'nom' => 'Safari 2',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    7 => array(
        'nom' => 'Safari 3',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    8 => array(
        'nom' => 'Safari 4',
        'categorie' => 1,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 489.99,
        'duree' =>14,
        'photo' => 'images-modal/automne.jpg',
        'dans_carousel' => '',
        'date' => 'd-m-y',
    ),
    9 => array(
        'nom' => 'Motoneige 1 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    10 => array(
        'nom' => 'Motoneige 2 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    11 => array(
        'nom' => 'Motoneige 3 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    12 => array(
        'nom' => 'Motoneige4 (Charlevoix, Québec)',
        'categorie' => 2,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 88.00,
        'duree' =>10,
        'photo' => 'images-modal/escalade_Husky.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    13 => array(
        'nom' => 'Chiens et gîtes du grand nord1',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    14 => array(
        'nom' => 'Chiens et gîtes du grand nord2',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    15 => array(
        'nom' => 'Chiens et gîtes du grand nord3',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    16 => array(
        'nom' => 'Chiens et gîtes du grand nord4',
        'categorie' => 3,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 199.00,
        'duree' =>3,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    17 => array(
        'nom' => 'Formule famille1',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    18 => array(
        'nom' => 'Formule famille 2',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    19 => array(
        'nom' => 'Formulefamille 3',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
    20 => array(
        'nom' => 'Formulefamille 4',
        'categorie' => 4,
        'description' => "Le produit 1 bla bla bla...",
        'prix' => 1600.00,
        'duree' =>7,
        'photo' => 'images-modal/chiens_traineau.jpg',
        'dans_carousel' => true,
        'date' => 'd-m-y',
    ),
);
//var_dump($data);
?>
<?php
require_once('data/defines.php');//le code va cherche le tableau data

session_start();
function make_action_url($action, $forfaits = '') {
    return '?'.P_ACTION.'=' . $action . ((! empty($forfaits)) ? '&'.F_FORFAITS.'=' . $forfaits : '');
}


// Initialisation des données de session
if ( ! array_key_exists(FORFAIT_CROISIERE, $_SESSION)) {
    $_SESSION[FORFAIT_CROISIERE] = 0;
}
if ( ! array_key_exists(FORFAIT_NATURE, $_SESSION)) {
    $_SESSION[FORFAIT_NATURE] = 0;
}
if ( ! array_key_exists(FORFAIT_SPORTHIVER, $_SESSION)) {
    $_SESSION[FORFAIT_SPORTHIVER] = 0;
}

// On part de la présence d'une action dans la queryString
if (array_key_exists(P_ACTION, $_GET)) { // Il y a un paramètre 'action' dans la queryString
    // On regarde s'il y a un paramètre fruit
    if (array_key_exists(F_FORFAITS, $_GET)) {
        // Si la valeur du fruit est valide
        if (in_array($_GET[F_FORFAITS], array(FORFAIT_CROISIERE, FORFAIT_NATURE, FORFAIT_SPORTHIVER))) {
            // Le paramètre fruit est valide
            switch ($_GET[P_ACTION]) {
                case OP_AJOUTER :
                    $_SESSION[$_GET[F_FORFAITS]]++;
                    break;
                case OP_RETIRER :
                    if ($_SESSION[$_GET[F_FORFAITS]] > 0) {
                        $_SESSION[$_GET[F_FORFAITS]]--;
                    }
                    break;
                case OP_RETIRER_TOUT :
                    $_SESSION[$_GET[F_FORFAITS]]=0;
                    break;
                default:
                    // Afficher erreur sur valeur action
            }
        }
    } elseif (OP_VIDER_PANIER === $_GET[P_ACTION]) { // Si pas de paramètre fruit et action est vider le panier
        $_SESSION[FORFAIT_CROISIERE] = 0;
        $_SESSION[FORFAIT_NATURE] = 0;
        $_SESSION[FORFAIT_SPORTHIVER] = 0;
    }
}








?>

