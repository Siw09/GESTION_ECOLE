<?php

// cette fpnction permet de connecter l'appli à une base de donnée.


function connectdb()
{
    $user='root'
    $password=''
    
    $db = null;

    try {
        $db = new PDO("mysql:host=localhost, dbname=gesscolarite',$user $password");
    } catch (Exception $e) {
        die("Oups! Une erreur s'est produite lors de la connexion a la base de donnée.");
    }

    return $db;

}