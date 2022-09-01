<?php
require_once('dataBase.php');
require('config/functions.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>


    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-center">
                <div class="col-4 pt-1">
                    <a class="btn btn-sm btn-outline-primary" href="register.php">Inscription</a>
                </div>
                <div class="col-4 text-center">
                    <!-- <img src="img/logcan.png" class="img-thumbnail" alt="" srcset="" style="width:150px"> -->
                    <a class="blog-header-logo text-dark" href="blog.php">CandyCraft</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <!-- <circle cx="10.5" cy="10.5" r="7.5" /> -->
                            <!-- <path d="M21 21l-5.2-5.2" /> -->
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="connect.php">Login</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-4 pt-4">
            <nav class="nav d-flex justify-content-evenly">
                <a class="p-2 btn btn-sm btn-outline-primary" href="blog.php">Home</a>
                <!-- <a class="p-2 link-secondary" href="#">Ma boutique</a> -->
                <a class="p-2 btn btn-sm btn-outline-primary" href="a_propos.php">À Propos</a>
                <a class="p-2 btn btn-sm btn-outline-primary" href="contact.php">Contact</a>
            </nav>
        </div>

        <main class="container">
            <div class="p-4 p-md-5 mb-4 rounded text-bg-info">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Nos ateliers de Bijouterie</h1>
                    <p class="lead my-3">De l’or dans les mains. Trouvez ici comment fabriquer de belles créoles, des bagues, un collier en perle, un bijou de tête... bref, une pièce qui vous ira à ravir et fabriquée aux côtés de nos artisans..</p>
                    <p class="lead mb-0"><a href="#" class="text-white fw-bold">Lire Plus...</a></p>
                </div>
            </div>
        </main>
        <!-- dernier morceau de blog -->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#"><img class="card-img-top" src="img/at1.jpeg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">juillet 1, 2022</div>
                            <h2 class="card-title">Devenez spécialiste</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Lire plus1 →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/at2.jpeg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">January 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Lire plus →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/at3.jpeg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Avril 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Lire plus →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/at4.jpeg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">May 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Lire plus →</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/at5.jpeg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">Juin 1, 2022</div>
                                    <h2 class="card-title h4">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-primary" href="#!">Lire plus →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <!-- <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Suivante</a></li>
                        </ul>
                    </nav> -->
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Recherche</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="entrer la recherche..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Aller!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Bracelets</a></li>
                                        <li><a href="#!">Colliers</a></li>
                                        <li><a href="#!">Pendentifs</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Categorie4</a></li>
                                        <li><a href="#!">Categorie5</a></li>
                                        <li><a href="#!">Categorie6</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Sidebar pour Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <h1>RELATED POST</h1>
        <div class="row justify-content-center">
            <?php
            $getArticle = $bdd->query('SELECT id, title, description, date FROM articles');
            while ($article = $getArticle->fetch()) { ?>

                <div class="col-lg-3 border bg-light m-1">

                    <h3><?= $article['title'] ?></h3>
                    <p><?= $article['id'] ?></p>
                    <p><?= $article['description'] ?></p>
                    <time><?= $article['date'] ?></time> <br>

                    <a href="single_post.php?id=<?= $article['id']; ?> ">Lire plus</a>
                </div>
            <?php }
            ?>
        </div>
        <!-- test card -->
        <!-- <div class="container">
            <div class="row justify-content-center">
                <?php
                $getArticle = $bdd->query('SELECT title, description, date FROM articles');
                while ($article = $getArticle->fetch()) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="img/n3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body border bg-light">
                            <h5 class="card-title"><?= $article['title'] ?></h5>
                            <p class="card-text"><?= $article['description'] ?></p>
                            <time><?= $article['date'] ?></time> <br>
                            <a href="#" class="btn btn-primary">Lire plus</a>
                        </div>
                    </div>
                <?php }
                ?>

            </div>
        </div> -->
        <!-- Fin test card -->

    </div>



    <!-- footer -->
    <footer class="blog-footer">
        <p>Blog CandyCraft <a href="https://getbootstrap.com/">Jean</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>