<?php
// //recuperer 1 article:
// require_once('dataBase.php');
// require_once('blog_post.php');
// function getArticle()
// {
//     require('dataBase.php');
//     $req = $bdd->prepare('SELECT * FROM articles WHERE id =?');
//     $req->execute(array($id));
//     if ($req->rowCount() == 1) {
//         $data = $req->fetch(PDO::FETCH_OBJ);
//         return $data;
//     } else {
//         header('Location: index.php');
//         $req->closeCursor();
//     }
// }
