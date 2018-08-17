<?php
session_start();
include('db.php');

$link = (substr($_POST['link'], 1));
$file = end(explode("/", $link));
$temp = explode("/", $link);
$cat = ($temp[count($temp)-2]);
$old = getcwd(); // Save the current directory

//execution de la requete
if (isset($_POST['link'])) {

    chdir("../content/files/".trim($cat));


    if (unlink(trim($file))) {
        chdir($old); // Restore the old working directory
        $_SESSION['status'] = "Fichier supprimé !";
    } else {
        $_SESSION['status'] = "Erreur lors de la suppression";
    }
} else {
    $_SESSION['status'] = "Aucun fichier séléctionné";
}

echo $_SESSION['status'];


//renvoi vers page precedente
header('Location: ' . $_SERVER['HTTP_REFERER']);