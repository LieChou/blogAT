<?php

function addComment($post_id, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines= $commentManager->postComment($post_id, $author, $comment);
    if ($affectedLines === false) 
    {
        throw new Exception('Impossible d\'ajouter le commentaire!');
    }
    else 
    {
        header('Location:index.php?action=post&id=' . $post_id);
    }
}