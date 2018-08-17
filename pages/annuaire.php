<?php


function show_page()
{
    ?>

    <div class="parallax-container valign-wrapper annuaire-hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light main-title">Annuaire</h2>
                    <h5 class="light sub-title">Vous trouverez ici toutes les données relatives aux collaborateurs DS.
                        <!doctype html>
                        <html lang="fr">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport"
                                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Document</title>
                        </head>
                        <body>

                        </body>
                        </html>
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/kari-shea-199320-unsplash.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <?php if (isset($_SESSION['user_id'])) {
    include("./modules/annuaire_modal.php");
}
    ?>
    <div class="container">
        <div class="section">
            <div class="row">
                <table class="highlight data-table" id="annuaire">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Interne</th>
                        <th>Email</th>
                        <th>Site</th>
                        <th>Service</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    //inclusion données Database
                    require('./script/db.php');
                    //Recupération des données contenues dans annuaire
                    $reponse = $pdo->query('SELECT * FROM annuaire');
                    //Affichage des données
                    $i = 0;
                    while ($data = $reponse->fetch()) {
                        $i++;
                        echo utf8_encode("
                <tr onmouseover=\"document.getElementById('".$i.'edit'."').style.visibility = 'visible';
                document.getElementById('".$i.'delete'."').style.visibility = 'visible';\"
                onmouseout=\"document.getElementById('".$i.'edit'."').style.visibility = 'hidden';
                document.getElementById('".$i.'delete'."').style.visibility = 'hidden';\">
                    <td>" . ucfirst($data['prenom']) . "</td>
                    <td>" . ($data['nom']) . "</td>
                    <td>" . $formatted_phone = implode(' ', str_split($data['telephone'], 2)) . "</td>
                    <td>" . $data['interne'] . "</td>
                    <td><a  href='mailto: " . $data['email'] . "' class='indigo-text'>" . $data['email'] . "</a></td>
                    <td style='display: none' id='user_id' class='user_id'>".$data['id']."</td>
                    <td>" . $data['site'] . "</td>
                    <td>" . $data['service'] . "</td>");
                        if (isset($_SESSION['user_id'])) { echo "
                    <td><a href=\"#edit_modal\" class=\"secondary-content modal-trigger\">
                        <i class=\"material-icons indigo-text \" id='".$i.'edit'."' style='visibility: hidden;'>edit</i>
                        </a>
                    </td>
                    <td><a href=\"#delete_modal\" class=\"secondary-content modal-trigger\">
                        <i class=\"material-icons red-text delete_user\" id='".$i.'delete'."' style='visibility: hidden;'>delete</i>
                        </a>
                    </td>
                </tr>
                ";}
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>