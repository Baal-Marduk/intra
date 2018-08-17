<?php
session_start();
include ('db.php');

//requete préparée
$req = $pdo->prepare('UPDATE annuaire SET nom=:nom, prenom=:prenom, telephone=:telephone, site=:site, service=:service, interne=:interne, email=:email WHERE id = :id');
//execution de la requete
$req->execute(array(":nom"=>mb_strtoupper(utf8_decode($_POST['nom'])),":prenom"=>ucfirst(utf8_decode($_POST['prenom'])),":telephone"=> str_replace(' ', '', $_POST['telephone']), ":site"=>$_POST['site'],":service"=> utf8_decode($_POST['service']),":interne"=> $_POST['interne'],":email"=> $_POST['email'],":id"=>$_POST['id']));
//message de validation
$_SESSION['status'] = "Collaborateur édité avec succès !";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);