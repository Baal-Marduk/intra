<?php
session_start();
include ("db.php");

//requete préparée
$req = $pdo->prepare('INSERT INTO news (title, body) VALUES (?, ?)');
//execution de la requete
$req->execute(array(utf8_decode($_POST['title']),utf8_decode($_POST['body'])));
//message de succès
$_SESSION['status'] = "Actu ajoutée !";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>