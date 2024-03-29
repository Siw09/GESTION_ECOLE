<?php

include 'function.php';

$donnees = array();

$erreurs = array();

$message = array();

if (isset($_POST["email-nom-utilisateur"]) && !empty($_POST["email-nom-utilisateur"])) {
    $donnees["email-nom-utilisateur"] = $_POST["email-nom-utilisateur"];
} else {
    $erreurs["email-nom-utilisateur"] = "Le champs email est requis. Veuillez le renseigné.";
}

if (isset($_POST["mot-de-passe"]) && !empty($_POST["mot-de-passe"])) {
    $donnees["mot-de-passe"] = $_POST["mot-de-passe"];
} else {
    $erreurs["mot-de-passe"] = "Le champs mot de passe est requis. Veuillez le renseigné.";
}

if (empty($erreurs)) {

    $user = check_if_user_exist($donnees["email-nom-utilisateur"], $donnees["mot-de-passe"]);

    if (isset($user) && !empty($user) && is_array($user)) {

        if (0 == $user["est_actif"]) {

            $message_success["statut"] = 0;
            $message_success["message"] = "Oups! Votre compte n'est actif pour le moment. Veuillez nous contactez.";

        } else {

            setcookie("info_utilisateur", json_encode($user));

            $message_success["statut"] = 1;
            $message_success["message"] = "Connexion éffectué avec succès.";

        }

    } else {

        $message_success["statut"] = 0;
        $message_success["message"] = "Oups! Email / mot de passe incorrect. Veuillez réessayer.";

    }

}


header("location: index.php?erreurs=" . json_encode($erreurs) . "&donnees=" . json_encode($donnees) . "&message=" . json_encode($message_success));