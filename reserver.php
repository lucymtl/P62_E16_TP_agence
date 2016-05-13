
<?php
    session_start();
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $adresse=$_POST['adresse'];
    $choix_forfait=$_POST['choix_forfait'];
    $date=$_POST['date'];
    $nb_participants=$_POST['nb_participants'];
    $nb_animaux=$_POST['nb_animaux'];

    if ($nom == ""){
        $_SESSION['error1']="Le nom est indispensable";
    }
    if ($prenom == ""){
        $_SESSION['error1']="Le nom est indispensable";
    }
    if ($email == ""){
        $_SESSION['error1']="Le nom est indispensable";
    } if ($tel == ""){
        $_SESSION['error1']="Le nom est indispensable";
    } if ($adresse == ""){
        $_SESSION['error1']="Le nom est indispensable";
    } if ($choix_forfait == "Seletione"){
        $_SESSION['error1']="Vou devez seletioner un pays";
    } if ($date == ""){
        $_SESSION['error1']="Le nom est indispensable";
    } if ($nb_participants == ""){
        $_SESSION['error1']="Le nom est indispensable";
    } if ($nb_animaux == ""){
        $_SESSION['error1']="Le nom est indispensable";
    }

header('location:contact.php');
?>