<?php
/**
 * Start the session.
 */
session_start();

/**
 * Include our MySQL connection.
 */

require 'db.php';


$validPassword = false;
//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if (isset($_POST['password']) && isset($_POST['username'])) {

//Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

//Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password FROM users WHERE username = :login";

    $stmt = $pdo->prepare($sql);
//Bind value.
    $stmt->bindValue(':login', $username);

//Execute.
    $stmt->execute();

//Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
//If $row is FALSE.
    if ($user === false) {
//Could not find a user with that username!

        //renvoie à la page précédente
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        $_SESSION['status'] = "Identifiant ou mot de passe incorrect";
        die('Incorrect username / password combination!');

    } else {
//User account found. Check to see if the given password matches the
//password hash that we stored in our users table.
        if ($passwordAttempt == $user['password']) {
            $validPassword = true;
        }
//If $validPassword is TRUE, the login has been successful.
        if ($validPassword) {

//Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            $id = $user['id'];


            //Si "se souvenir" est coché
            if ($_POST['remember'] == true) {
                if (!isset($_COOKIE['token'])) {
                    //création d'un token utilisateur
                    $token = bin2hex(openssl_random_pseudo_bytes(16));
                    setcookie('token', $token, time() + 7200, null, null, false, true);
                }
            }


//requete préparée
            $req = $pdo->prepare("UPDATE users SET token=? WHERE id = $id");
//execution de la requete
            $req->execute(array(utf8_encode($_COOKIE['token'])));


//Redirect to our protected page, which we called home.php
            echo "Connexion réussie !";
            $_SESSION['status'] = "Connexion réussie!";
            //renvoie à la page précédente
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;

        } else {
//$validPassword was FALSE. Passwords do not match.
            $_SESSION['status'] = "Identifiant ou mot de passe incorrect";
            //renvoie à la page précédente
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die('Incorrect username / password combination !');

        }
    }
}

?>