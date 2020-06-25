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
    require('View/backend/NewPost.php');
}   

function addPost($title, $content)
{
    $postManager = new PostManager();

    $affectedLines = $postManager->createPost($title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter l\'article !');
    }
    else {
        header('Location: index.php?action=adminDashboard');
    }
}

function deletePost($Id){
    $PostManager = new PostManager();
    $PostManager->deletePost($Id);
    viewAdminDashboard();
}