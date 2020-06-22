<?php
require_once('Model/PostManager.php');
require_once('Model/CommentManager.php');


function viewAdminDashboard()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->viewCommentReport();
    
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet
    require('View/backend/MenuB.php');
}

function restoreComment($commentId)
{
    $commentManager = new CommentManager();
    $commentManager->restoreComment($commentId);
    viewAdminDashboard();
}

function deleteComment($commentId){
    $commentManager = new CommentManager();
    $commentManager->deleteComment($commentId);
    viewAdminDashboard();
}

function viewNewPost()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet
    require('View/backend/NewPost.php');
}    