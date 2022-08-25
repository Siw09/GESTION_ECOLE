


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">

    <!-- STYLE PERSONNALISE -->
    <link rel="stylesheet" href="../css/style.css">
      <!-- cdn select2 -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <title>Dashboard | Gestion De La Scolarité </title>
</head>

<body>

    <header class="fixed-top mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fs-5 ">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html">
                <img src="../images/logo/logo.PNG" alt="Logo du site ">
            </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">Acceuil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="Etudiants.html">Etudiants</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Comptabilite.html">Comptabilité</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Fillieres_matieres.html">Fillières & Matières </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="Composition_notes.html">Notes et Compositions </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle Profil" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <div class="Profil_image"> <img src="../images/babydoge/babydogeprofil.jpg" alt="image du profil de l'utilisateur connecté"></div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item "  href="#">Profil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../connexion/connexion.html">Déconnexion</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
