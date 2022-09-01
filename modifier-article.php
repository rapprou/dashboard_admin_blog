<?php
require_once('dataBase.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];

    $recupArticle = $bdd->prepare('SELECT * FROM articles where id = ?');
    $recupArticle->execute(array($getid));
    if ($recupArticle->rowCount() > 0) {
        $articleInfos = $recupArticle->fetch();
        $title = $articleInfos['title'];
        //$description = $articleInfos['description'];
        // remplace les valises <br> ..str_replace
        $description =  str_replace('<br />', '', $articleInfos['description']);
        //validation submit name valider
        if (isset($_POST['valider'])) {
            $title_saisie = htmlspecialchars($_POST['title']);
            $description_saisie = nl2br(htmlspecialchars($_POST['description']));

            $updateArticle = $bdd->prepare('UPDATE articles SET title = ?, description = ? WHERE id = ?');
            $updateArticle->execute(array($title_saisie, $description_saisie, $getid));
            header('Location: articles.php');
        }
    } else {
        echo "Aucun article trouvé";
    }
} else {
    echo "Aucun identifiant trouvé";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Article</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Candycraft</a>
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
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="membres.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Création auteur
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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Tableau de bord</h1>
                    <!-- <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            Ce weekend
                        </button>
                    </div> -->
                </div>

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

                <h2>Modifier Article</h2>
                <!-- debut -->
                <!-- <div class="container">
                    <div class="row">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Modifier ">
                            </div>
                            <div class="mb-3">
                                <label for="floatingTextarea">Description</label>
                                <textarea class="form-control" placeholder="Modifier description" id="floatingTextarea"></textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div> -->
                <!-- fin -->
                <div class="container">
                    <div class="row justify-content-center">
                        <form method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="<?= $title; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea name="description" class="form-control"><?= $description; ?></textarea>
                            </div>


                            <input type="submit" name="valider">
                            <!-- <a href="#"><input type="submit" name="valider"></a> -->
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <!-- <div class="container">
        <form method="post">
            <input type="text" name="title" id="" value="<?= $title; ?>">
            <br>
            <textarea name="description"><?= $description; ?></textarea>
            <br>
            <input type="submit" name="valider">
        </form>
    </div> -->

</body>

</html>