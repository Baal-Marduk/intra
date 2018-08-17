<?php
$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

 echo "<div id=\"login_modal\" class=\"modal\">
<script src=\"js/scripts.js\"></script>
    <div class=\"container modal-content\">
        <h4>ADMINISTRATION</h4>
        <p>Entrez vos identifiants de connexion</p>
        <form action=\"./script/login.php\" method=\"post\" id=\"login_form\">
            <div class=\" input-field row\">
                <i class=\"material-icons prefix\">person</i>
                <input id=\"username\" type=\"text\" class=\"\" name=\"username\" required>
                <label for=\"username\" >Utilisateur</label>
            </div>
            <div class=\"input-field row\">
                <i class=\"material-icons prefix\">lock</i>
                <input id=\"password\" type=\"password\" class=\"\" name=\"password\" required>
                <label for=\"password\">Mot de passe</label>
            </div>
            <div class=\"modal-footer\">
                <a href=\"#\" class=\"btn modal-close waves-effect waves-red\" >Annuler</a>
                <a href=\"#\" target=\"_self\" name=\"submit\" class=\"btn modal-close waves-effect waves-green\" type=\"submit\"  id=\"login_submit\" >Connexion</a>
            </div>
            <input type='hidden' name='token' value=\"".$token."\" />
    </form>
    </div>
</div>";
?>