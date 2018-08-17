
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    $_SESSION['status'] = "Déconnexion réussie !";
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirecting To Home Page
}
?>