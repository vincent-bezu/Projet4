<?php
require('../../Controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'adminDashboard'){
            viewAdminDashboard();
        }
    }
    
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}