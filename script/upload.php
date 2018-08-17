<?php
session_start();
// passage du paramètre de la catégorie du document uploadé
$selected_cat = $_POST['categorie'];
//cible du dossier d'enregistrement
$target_dir = "../content/files/".$selected_cat."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $target_file . " | " . $target_dir . " | ". $selected_cat;
$uploadOk = 1;
//type de fichier
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!isset($_POST['categorie'])){
    $uploadOk = 0;
    $_SESSION['status'] = "Erreur, veuillez séléctionner une catégorie";
}
// Check si le fichier existe
if (file_exists($target_file)) {
    $uploadOk = 0;
    $_SESSION['status'] = "Désolé, le fichier existe déjà";
    echo $_SESSION['status'];
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 20000000) {
    $uploadOk = 0;
    $_SESSION['status'] = "Désolé, votre fichier est trop volumineux";
    echo $_SESSION['status'];

}
// Allow certain file formats
if ($fileType != "pdf" && $fileType !="txt" && $fileType !="docx" && $fileType !="xls" && $fileType !="jpg" && $fileType !="jpeg") {
    $uploadOk = 0;
    $_SESSION['status'] = "Désolé, ce format de fichier n'est pas autorisé";
    echo $_SESSION['status'];

}
// Check if $uploadOk is set to 0 by an error
if (!$uploadOk == 0) {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['status']  = "Le fichier " . basename($_FILES["fileToUpload"]["name"]) . " a bien été ajouté.";

        echo $_SESSION['status'];
    } else {
        $_SESSION['status'] = "Erreur pendant l'envoi.";
        $uploadOk = 0;
        echo $_SESSION['status'];
    }
}

if ($uploadOk == 1){
    $_SESSION['uploadSuccess'] = 'green-text';
    echo $_SESSION['uploadSuccess'];
} else {
    $_SESSION['uploadSuccess'] = 'red-text';
    echo $_SESSION['uploadSuccess'];
}


//header("Location: ../index.php?page=documents#");
?>







