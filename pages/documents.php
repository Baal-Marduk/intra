<?php

function show_page()
{

    $directory = "./content/files/";
    $dirs = scandir($directory);
    $dirsNumber = count($dirs);
    $badge = "";

    if( ! empty($_SESSION['status']))
{
    unset($_SESSION['status']);
}
    ?>


    <meta charset="utf-8"/>
    <div class="parallax-container valign-wrapper annuaire-hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light main-title">Documents</h2>
                    <h5 class="light sub-title">Vous trouverez ici tout les documents DS</h5>
                        <!doctype html>
                        <html lang="fr">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport"
                                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Documents</title>
                        </head>

                        </html>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/jan-kahanek-184676.jpg" alt="Unsplashed background img 2"></div>
    </div>
 <?php if (isset($_SESSION['user_id'])){
   include ("./modules/document_modal.php");
}?>
        <div class="container">
            <ul class="row">
                <ul class="collapsible Accordion" data-collapsible="accordion">
                    <!-- scan du dossier files et création de la liste des documents et de leur container selon le contenu de content/files/...-->
                    <?php
                    // boucle for de création de div pour chaque dossier trouvé
                    for ($i = 2;
                    $i < $dirsNumber;
                    $i++) {

                        $files = scandir($directory . $dirs[$i] . '/');
                    $filesNumber = count(scandir($directory . $dirs[$i] . '/'));
                    $fileNumber = count(scandir($directory . $dirs[$i] . '/'))-2;
                    // logo automatique pour dossiers récurrents
                    switch ($dirs[$i]) {
                        case "Programmation":
                            $icon = "today";
                            break;
                        case "Comptabilité":
                            $icon = "euro_symbol";
                            break;
                        case "Formation":
                            $icon = "school";
                            break;
                        case "Prévention des risques":
                            $icon = "warning";
                            break;
                        case "Publicité":
                            $icon = "local_activity";
                            break;
                        case "RH":
                            $icon = "people";
                            break;
                        case "Stockage":
                            $icon = "move_to_inbox";
                            break;
                        case "Prestataires transport":
                            $icon = "local_airport";
                            break;
                        case "Transit":
                            $icon = "local_shipping";
                            break;
                        case "Vérif":
                            $icon = "check";
                            break;
                        default:
                            $icon = "insert_drive_file";
                    }





                    echo " 
                    <li>
                        <div class=\"collapsible-header\">
                            <i class=\"material-icons \">" . $icon . "</i>" . $dirs[$i] . "
                            <span class=\"".$badge." badge\">" . $fileNumber . " </span></div>
                        <div class=\"collapsible-body\">
                           <ul class=\"collection\">";



                    //boucle de création de liens pour chaque fichier trouvé
                    for ($j = 2; $j < $filesNumber; $j++) {

                        $path = substr($directory . $dirs[$i] . "/".$files[$j],1);
                        $time = filemtime(getcwd().$path);

                        if ($time>time()-(60*60*24*5)){
                            $badge="<span class=\"new badge deep-orange\"></span>";
                        }


                        echo "
                                    <li class=\"collection-item\" style=\"cursor:pointer\" >$badge
                                    <div id='$i$j' >$files[$j]  ";
                        if(isset($_SESSION['user_id'])){echo "
                                    <a href='#delete_doc_modal' class='secondary-content modal-trigger'><i class=\"material-icons red-text delete_doc\">delete</i></a>";}
                        echo "
                                    <a id='file-path$i$j' href=\"$directory" . $dirs[$i] . "/$files[$j] \" class=\"secondary-content file-path\" download>
                                    <i class=\"material-icons indigo-text \">file_download</i>
                                    </a>
                                    </div>
                                    </li>";
                        $badge=null;
                    }

                    ?>
                </ul>
        </div>
        </li>
        <?php
        }
        ?>
        </ul>
    </div>
    </div>
    </div>
    <?php
}

?>


