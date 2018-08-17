<?php

include('script/login.php'); // Includes Login Script

if (isset($_SESSION['status'])) {
$login_message = $_SESSION['status'];
unset($_SESSION['status']);
echo " <link href=\"js/materialize.js\" rel=\"script\"/>
<script type=\"text/javascript\">document.onload = Materialize.toast(\"".$login_message."\",5000);</script>
";
}

?>