



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
    <title>Inscription | Gestion de scolarité</title>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="card card-outline card-success  p-2 m-5 col-lg-6 ">

                    
                <div class="card-header text-center">

                    <a href="#" class="h1"><b>Ges</b>Scolarité</a>
                </div>


                <div class="card-body">

        
                    <p class="login-box-msg">Enregistrer un utilisateur </p>

                    <form action="inscription-traitement.php" method="post" novalidate="">

                        <!-- Le champs nom -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-nom">

                                Nom:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group">

                                <input type="text" name="nom" id="inscription-nom" class="form-control" placeholder="Veuillez entrer votre nom" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-user"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs prenom -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-prenom">

                                Prénom:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group">

                                <input type="text" name="prenom" id="inscription-prenom" class="form-control" placeholder="Veuillez entrer votre prénom" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-user"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs sexe -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-sexe">

                                Sexe:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="form-group clearfix">

                                <div class="icheck-primary d-inline">

                                    <input type="radio" name="sexe" checked="" id="sexe-m" value="M">

                                    <label for="sexe-m">M</label>

                                </div>

                                <div class="icheck-primary d-inline">

                                    <input type="radio" name="sexe" checked="" id="sexe-f" value="F">

                                    <label for="sexe-f">F</label>

                                </div>
                            </div>


                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs date de naissance -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-date-naissance">

                                Date de naissance:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group mb-3">

                                <input type="date" name="date-naissance" id="inscription-date-naissance" class="form-control" placeholder="Veuillez entrer votre date de naissance" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-baby"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs email -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-email">

                                Email:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group mb-3">

                                <input type="email" name="email" id="inscription-email" class="form-control" placeholder="Veuillex entrer votre address email" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-envelope"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs nom d'utilisateur -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-nom-utilisateur">

                                Nom d'utilisateur:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group mb-3">

                                <input type="text" name="nom-utilisateur" id="inscription-nom-utilisateur" class="form-control" placeholder="Veuillez entrer votre nom d'utilisateur" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-user"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs mot de passe -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-mot-passe">

                                Mot de passe:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group mb-3">

                                <input type="password" name="mot-passe" id="inscription-mot-passe" class="form-control" placeholder="Veuillez entrer votre mot de passe" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-key"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <!-- Le champs retapez mot de passe -->
                        <div class="col-sm-12 mb-3">

                            <label for="inscription-retapez-mot-passe">

                                Retapez mot de passe:

                                <span class="text-danger">(*)</span>

                            </label>

                            <div class="input-group mb-3">

                                <input type="password" name="retapez-mot-passe" id="inscription-retapez-mot-passe" class="form-control" placeholder="Veuillez retaper votre mot de passe" value="" required="">

                                <div class="input-group-append">

                                    <div class="input-group-text">

                                        <span class="fas fa-key"></span>

                                    </div>

                                </div>

                            </div>

                            <span class="text-danger">

                                
                            </span>

                        </div>

                        <div class="row">

                            <div class="col-6"></div>

                            <!-- /.col -->
                            <div class="col-6">

                                <button type="submit" class="btn btn-success btn-block">Inscription</button>

                            </div>
                            <!-- /.col -->

                        </div>

                    </form>

                <a href="connexion.php" class="text-center mt-3">J'ai deja un compte</a>

                </div>


            </div>
                    
            <div class=" col"></div>
        

        </div>



    </div>




            
</body>
</html>