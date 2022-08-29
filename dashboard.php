<?php

include 'function.php';

// $user_connected = check_if_user_conneted();

// if (!$user_connected) {
//     header("location: connexion.php");
// }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="public/css/adminlte.min.css?v=3.2.0">


    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">

    <!-- STYLE PERSONNALISE -->
    <link rel="stylesheet" href="../css/style.css">

     <!-- fonteawesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>

      <!-- cdn select2 -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="public/css/bootstrap/css/bootstrap.css">

    <!-- STYLE PERSONNALISE -->
    <link rel="stylesheet" href="public/css/style.css">
      <!-- cdn select2 -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <title>Dashboard | Gestion De La Scolarité </title>
</head>






<body class="hold-transition sidebar-mini">
<div class="wrapper">

   
    <header class="fixed-top mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fs-5  ">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html">
                <img src="images/logo/logo.PNG" alt="Logo du site ">
            </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="?requette=acceuil">Acceuil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?requette=etudiants">Etudiants</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?requette=Comptabilite">Comptabilité</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?requette=Fillieres_matieres">Fillières & Matières </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="?requette=Composition_notes">Notes et Compositions </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle Profil" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="true">

                                <div class="Profil_image"> <img src="images/babydoge/babydogeprofil.jpg" alt="image du profil de l'utilisateur connecté"></div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item "  href="#">Profil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="connexion.php">Déconnexion</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
   

    <div class="content-wrapper">

        <?php contenu(); ?>

    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 0.0.1
        </div>
        <strong>Copyright &copy; 2022 <a href="#">  Gestscolarite</a>.</strong> Tous les droits réservés.
    </footer>

</div>


<script src="public/plugins/jquery/jquery.min.js"></script>

<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="public/js/adminlte.min.js?v=3.2.0"></script>

<script src="public/js/demo.js"></script>
</body>
</html>


