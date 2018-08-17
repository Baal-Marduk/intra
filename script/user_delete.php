<?php
session_start();
include ('db.php');

//requete préparée
$req = $pdo->prepare('DELETE FROM annuaire WHERE id=:id');
//execution de la requete
$req->execute(array(":id"=>$_POST['id']));
//message de validation
$_SESSION['status'] = "Collaborateur supprimé de l'annuaire!";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);