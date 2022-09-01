<?php
session_start();
require_once('dataBase.php');

if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['email'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        // tester avec password_hash ->

        $insertUser = $bdd->prepare('INSERT INTO users (pseudo, email, mdp) VALUES(?,?,?)'); //1
        $insertUser->execute(array($pseudo, $email, $mdp));

        $recupUsers = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? and email = ? and mdp = ?'); //2
        $recupUsers->execute(array($pseudo, $email, $mdp));
        if ($recupUsers->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            header('location: connect.php ');
        }

        //afficher la session id
        //echo $_SESSION['id'];
    } else {
        echo 'veuillez completer tous les champs';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/connection.css">
    <script src="https://kit.fontawesome.com/7aafcc8abf.js" crossorigin="anonymous"></script>


</head>

<body>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 bg-info">hello</div>
        </div>
    </div> -->
    <div class="container">
        <main class="form-signin w-100 m-auto">
            <form method="post" action="">
                <!-- <a href="blog.php">Mozilla </a> -->
                <a href="blog.php"><img class="mb-2" src="img/logo.png" alt="" width="300;" height="300;" align="content:center;">
                </a>
                <h1 class="h3 mb-2 fw-normal text-center">Inscription</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="pseudo" placeholder="pseudo or email" autocomplete="off">
                    <label for="floatingInput"><i class="fas fa-user"></i> Pseudo</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="pseudo or email" autocomplete="off">
                    <label for="floatingInput"><i class="fas fa-envelope"></i> Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp" autocomplete="off">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->

                <button class="w-100 btn btn-lg btn-info" type="submit" name="envoi">Envoyer</button>
                <div class="row text-center">
                    <div class="col-6"><a href="blog.php">CandyCraft</a></div>
                    <div class="col-6"><a href="connect.php">Connecte-vous</a></div>
                </div>
                <!-- <a href="blog.php"> Retour au blog</a> -->
                <p class="mt-5 mb-3 text-muted text-center">&copy; CandyCraft – 2022</p>
            </form>

        </main>

    </div>
    <!-- <div class="container">
        <form action="" method="post" align="center">
            <input type="text" name="pseudo" autocomplete="off"><br>
            <input type="password" name="mdp" autocomplete="off"><br>
            <button type="submit" name="envoi">Inscription</button>
        </form>
    </div> -->


</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>