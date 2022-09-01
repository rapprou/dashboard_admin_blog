<?php

require_once('dataBase.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $recupUsers = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $getid = $_GET['id'];
    $recupUsers->execute(array($getid));

    if ($recupUsers->rowCount() > 0) {
        $bannirUser = $bdd->prepare('DELETE FROM `users` WHERE id = ?');
        $bannirUser->execute(array($getid));
        header('Location: membres.php');
    } else {
        echo 'aucun membre n ete trouve';
    }
} else {
    echo 'identifiant non recuperer';
}
