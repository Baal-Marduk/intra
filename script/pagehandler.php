<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'annuaire':
            require('pages/annuaire.php');
            break;
        case 'documents':
            require('pages/documents.php');
            break;
    }
} else {
    require('pages/welcome.php');
}


