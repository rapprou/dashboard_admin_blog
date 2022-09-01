<?php

$bdd = new PDO('mysql:host=localhost; dbname=espace_admin; charset=utf8', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// if (!$bdd) {
//     header('Location: errors/dberror.php');
//     die();
// }
