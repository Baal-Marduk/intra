<?php
session_start();
include ('db.php');

//requete préparée
$req = $pdo->prepare('INSERT INTO annuaire (nom, prenom, telephone, site, service, interne, email) VALUES(?, ?, ?, ?, ? ,? ,? )');
//execution de la requete
$req->execute(array(mb_strtoupper($_POST['nom']),ucfirst($_POST['prenom']), $_POST['telephone'], $_POST['site'], $_POST['service'], $_POST['interne'], $_POST['email']));
//message de validation
$_SESSION['status'] = "Collaborateur ajouté avec succès !";
//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);