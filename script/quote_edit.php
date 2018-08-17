<?php
session_start();
include ("db.php");

//requete préparée
$req = $pdo->prepare('UPDATE quote SET content=? WHERE id = 1');
//execution de la requete
$req->execute(array(utf8_decode($_POST['content'])));
//message de succès
$_SESSION['status'] = "Phrase du jour éditée !";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>