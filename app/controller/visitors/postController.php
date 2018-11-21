<?php

require_once('../app/model/postManager.php');
require_once('../app/model/commentManager.php');

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    require('../app/view/visitors/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    require('../app/view/visitors/postView.php');
}



//function listCommentsValidated