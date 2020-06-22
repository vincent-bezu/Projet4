<?php
require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                var_dump($_POST);
                if (!empty($_POST['Author']) && !empty($_POST['Comment'])) {
                    addComment($_GET['id'], $_POST['Author'], $_POST['Comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action']== 'reportComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                reportComment($_GET['id'], $_GET['postId']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'adminDashboard'){
            viewAdminDashboard();
        }

        elseif ($_GET['action'] == 'restoreComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0 ){
                restoreComment($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
            
        }
        elseif ($_GET['action'] == 'deleteComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0 ){
                deleteComment($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        }

        elseif ($_GET['action'] == 'NewPost'){
            viewNewPost();
        }
    }
    else {
        listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}