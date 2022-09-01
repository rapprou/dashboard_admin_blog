<?php
require_once('dataBase.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $recupArticles = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $recupArticles->execute(array($getid));
    if ($recupArticles->rowCount() > 0) {
        $deleteArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        $deleteArticle->execute(array($getid));
        header('Location: articles.php');
    } else {
        echo 'aucun article trouve';
    }
} else {
    echo 'Aucun identifiant trouve';
}
