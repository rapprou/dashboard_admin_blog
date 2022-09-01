<?php
session_start();
require_once 'dataBase.php';
/** validation de mes champs formulaire, mais pour la champ email je vais
le desactiver */

if (isset($_POST["valider"])) {
    if (!empty($_POST["pseudo"]) and !empty($_POST["mdp"])) { //and !empty($_POST["email"])
        $pseudo = htmlspecialchars($_POST['pseudo']);
        //$email = ($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        //requette
        $recupUsers = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?'); // 3
        $recupUsers->execute(array($pseudo, $mdp));


        $pseudo_saisie = htmlspecialchars($_POST['pseudo']);
        //$email_saisie = htmlspecialchars($_POST['email']); 
        $mdp_saisie = htmlspecialchars($_POST['mdp']);

        if ($recupUsers->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            //$_SESSION['email'] = $email;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            //echo $_SESSION['id'];
            header('Location: index.php');
        } else {
            echo 'votre mot de passe est incorrect';
        }
    } else {
        echo 'completer les champs';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez-vous</title>
    <link rel="stylesheet" href="css/connection.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<body>
    <!-- <div class="container">
        <form action="" method="post" align="center">
            <input type="text" name="pseudo" autocomplete="off">
            <br>
            <input type="password" name="mdp">
            <br>
            <input type="submit" name="valider">
        </form>
    </div> -->

    <!-- fin formulaire -->
    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form method="post" action="">
                <img class="mb-2" src="img/logo.png" alt="" width="300" height="300" align="content:center">
                <h1 class="h3 mb-2 fw-normal text-center">Se connecter</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="pseudo" placeholder="pseudo or email" autocomplete="off">
                    <label for="floatingInput">Pseudo</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp" autocomplete="off">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <button class="w-100 btn btn-lg btn-success" type="submit" name="valider">connection</button>

                <div class="row text-center">
                    <div class="col-6"><a href="blog.php">CandyCraft</a></div>
                    <div class="col-6"><a href="register.php">S'inscrire</a></div>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">&copy; CandyCraft – 2022</p>
            </form>

        </main>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>