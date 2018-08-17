<?php
session_start();
include 'db.php';
//Recupération des données contenues dans annuaire
$reponse = $pdo->query('SELECT * FROM news ORDER BY time DESC LIMIT 3');
//Affichage des données

while ($data = $reponse->fetch()) {
    $date=date_create($data['time']);
    echo "<div class=\"col s4 center\">
                     <h4>" . utf8_encode($data['title']) . "</h4>
                    <p class=\"editable_news\" id=\"news_edit1\">" . utf8_encode($data['body']) . "</p>
                    <p class=\" right \">". date_format($date,'d/m/y')."</p>
                </div>";
}

