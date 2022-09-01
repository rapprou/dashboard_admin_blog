<?php
session_start();
require_once('dataBase.php');

if (!$_SESSION['mdp']) {
    header('Location: connect.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher tous les articles</title>
    <script src="https://kit.fontawesome.com/7aafcc8abf.js" crossorigin="anonymous"></script>
    <script src="js/delete.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="blog.php">Candycraft</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Rechercher" aria-label="Search">
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
                                Creation Auteur
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

                <h3>Liste d'articles</h3>
                <!-- test code -->
                <div class="row align-items-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $recupArticles = $bdd->query('SELECT * from articles ORDER BY `date`DESC');

                            while ($article = $recupArticles->fetch()) { ?>
                                <tr>
                                    <td><?= $article['id'] ?></td>
                                    <td><?= $article['title'] ?></td>
                                    <td><?= $article['description'] ?></td>
                                    <td><?= $article['date'] ?></td>
                                    <td>
                                        <a onclick="return suppr()" href="supprimer-article.php?id=<?= $article['id']; ?>" class="btn btn-small btn-danger">
                                            <i class="fa-solid fa-trash"></i>Suppr
                                        </a>
                                        <a href="modifier-article.php?id=<?= $article['id']; ?>" class="btn btn-small btn-warning">
                                            <i class="fa-solid fa-pen-to-square"></i>Modif
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                            ?>

                        </tbody>
                    </table>

                </div>
                <!-- debut anciencode -->
                <!-- <div class="row align-items-center">
                    <div class="container">
                        <a href="index.php">Retour aux articles</a>
                        <?php
                        $recupArticles = $bdd->query('SELECT * FROM articles');
                        while ($article = $recupArticles->fetch()) {
                        ?>
                            <div class="article" style="border: 1px solid #000" ;>
                                <h1><?= $article['title']; ?></h1>
                                <br>
                                <p><?= $article['description']; ?></p>
                                <a href="supprimer-article.php?id=<?= $article['id']; ?>">
                                    <button style="color:white; background-color:red; margin-bottom: 10px;">Supprimer Article</button>
                                </a>
                                <a href="modifier-article.php?id=<?= $article['id']; ?>">
                                    <button style="color:black; background-color:yellow; margin-bottom: 10px;">Modifier Article</button>
                                </a>
                            </div>
                        <?php

                        }
                        ?>
                    </div>

                </div> -->
                <!-- fin ancien code -->
            </main>
        </div>
    </div>
</body>
<script src="js/delete.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>