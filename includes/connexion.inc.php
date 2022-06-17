<?php
    if (isset($_POST['frmConnexion'])) {
        $mail = htmlentities(trim($_POST['mail']));
        $password = htmlentities(trim($_POST['password']));

        $erreurs = array();

        if (mb_strlen($mail) === 0)
            array_push($erreurs, "Il manque votre e-mail");

        if (mb_strlen($password) === 0)
            array_push($erreurs, "Il manque votre mot de passe");

        if (count($erreurs)) {
            $messageErreur = "<ul>";

            for($i = 0 ; $i < count($erreurs) ; $i++) {
                $messageErreur .= "<li>";
                $messageErreur .= $erreurs[$i];
                $messageErreur .= "</li>";
            }
    
            $messageErreur .= "</ul>";
    
            echo $messageErreur;

            include './includes/frmConnexion.php';
        }

        else {
$_SESSION['loginUser'] = $mail;
print_r($_SESSION['loginUser']);



header ('location:index.php?page=accueil');
        }
    }
    
    else {
        $mail = "";
        include './includes/frmConnexion.php';
    }
