<?php
session_start();
include 'db.php';
//Recupération des données contenues dans annuaire
$reponse = $pdo->query('SELECT * FROM infos');
//Affichage des données
$data = $reponse->fetch() ;
echo utf8_encode($data['info']);