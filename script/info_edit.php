<?php
session_start();
include ("db.php");

//requete préparée
$req = $pdo->prepare('UPDATE infos SET info=? WHERE id = 1');
//execution de la requete
$req->execute(array(utf8_decode($_POST['info'])));
//message de succès
$_SESSION['status'] = "Informations éditée avec succès !";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>