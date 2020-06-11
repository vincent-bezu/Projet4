<?php

require_once('Model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('View/Frontend/Menu.php');
}

function post($postId)
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($_GET['id']);
    require('view/frontend/PostView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}