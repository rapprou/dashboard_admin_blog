<?php
session_start();
require_once('dataBase.php');

if (!$_SESSION['mdp']) {
    header('Location: membres.php');
}

if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        // tester avec password_hash ->

        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, email, mdp) VALUES(?,?,?)');
        $insertUser->execute(array($pseudo, $email, $mdp));

        $recupUsers = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? and email = ? and mdp = ?');
        $recupUsers->execute(array($pseudo, $email, $mdp));
        if ($recupUsers->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUsers->fetch()['id'];
            header('location: membres.php ');
        }

        //afficher la session id
        //echo $_SESSION['id'];
    } else {
        echo "veuillez compléter tous les champs ..";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher le membres</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7aafcc8abf.js" crossorigin="anonymous"></script>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">Candycraft</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="logout.php">Déconnexion</a>
            </div>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membres.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Création Auteur
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="publier-article.php">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Publier Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="articles.php">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Liste Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Se déconnecter
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Reports
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers" class="align-text-bottom"></span>
                                Integrations
                            </a>
                        </li> -->
                    </ul>

                    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6> -->
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de bord</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            Ce weekend
                        </button>
                    </div>
                </div> -->

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

                <h3>Section Auteur</h3>

                <!-- debut formulaire ajout author -->
                <div class="container mt-3">
                    <div class="row justify-content-center">

                        <div class="col-md-5">
                            <form method="post" action="">
                                <!-- <img class="mb-2" src="img/logo.png" alt="" width="300" height="300" align="content:center"> -->
                                <h1 class="h3 mb-2 fw-normal text-center">Ajouter auteur</h1>

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
                            </form>
                        </div>

                    </div>

                </div>

                <!-- fin ajout author -->
                <div class="row align-items-center mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $recupUsers = $bdd->query('select * from users');
                            while ($user = $recupUsers->fetch()) { ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['pseudo'] ?></td>
                                    <td><?= $user['email'] ?></td>

                                    <td>
                                        <!-- <a href="editform.php?id=<?= $user->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                        <a onclick="return suppr()" href="bannir.php?id=<?= $user['id'] ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>

                            <?php }
                            ?>

                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


</body>
<!-- JavaScript Bundle with Popper -->
<script src="js/delete_author.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>