<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
//error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8">
    <meta title="Intranet DS">
    <title>Intranet DS</title>


    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/scripts.js"></script>




</head>
<body><!-- HEADER -->
<?php
include('modules/toast_alert.php'); // Includes Login Script
?>


<div class="navbar-fixed">
    <nav class="nav-extended white">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo"><img class="logo responsive-image"
                                                                            src="img/logoDS.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a></li>
                <li><a href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a></li>
                <li><a href="http://192.168.15.107/" target="_blank">Site DS</a></li>
                <?php if (isset($_SESSION['user_id'])){
                    echo "<li><a class=\"\" href=\"script/logout.php\"><i
                                class=\"material-icons right deep-orange-text\">cancel</i>Déconnexion</a></li>";
                }else {
                    echo "<li><a class=\"modal-trigger\" href=\"#login_modal\"><i
                                class=\"material-icons right deep-orange-text\">lock</i>Admin</a></li>";
                } ?>

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a></li>
                <li><a href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a></li>
                <li><a href="http://192.168.15.107/" target="_blank">Site DS</a></li>
            </ul>
        </div>
        <div class="nav-content indigo">
            <ul class="tabs tabs-transparent container">
                <li class="tab"><a href="index.php" target="_self"
                                   class="<?php echo(($_GET['page']) == "welcome" ? "active" : "") ?>">Accueil</a></li>
                <li class="tab"><a href="?page=documents" target="_self"
                                   class="<?php echo(($_GET['page']) == "documents" ? "active" : "") ?>">Documents
                        DS</a></li>
                <li class="tab"><a href="?page=annuaire" target="_self"
                                   class="<?php echo(($_GET['page']) == "annuaire" ? "active" : "") ?>">Annuaire</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<?php
//modal de connexion
require('modules/login_modal.php');
//script de gestion des pages
require('script/pagehandler.php');
show_page();
?>

</body>
<!-- FOOTER -->
<footer class="page-footer indigo darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Intranet DS</h5>
                <p class="grey-text text-lighten-4">Cette page d'accueil a pour but de réunir toutes les données et
                    liens nécessaires aux collaborateurs DS.</p>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Liens utiles</h5>
                <ul>
                    <li><a class="white-text" href="http://192.168.15.107/" target="_blank">Site DS</a></li>
                    <li><a class="white-text" href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a>
                    </li>
                    <li><a class="white-text" href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a>
                    </li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Glossaire</h5>
                <ul>
                    <li><a class="white-text" href="index.php" target="_self">Accueil</a></li>
                    <li><a class="white-text" href="?page=documents" target="_self">Documents DS</a></li>
                    <li><a class="white-text" href="?page=annuaire" target="_self">Annuaire</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Créé par Leo Wattier grâce à <a class="indigo-text text-lighten-3" href="http://materializecss.com"
                                            target="_blank">Materialize</a>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->

</body>
</html>
