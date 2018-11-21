<?php

require_once('manager.php');
class CommentManager extends Manager 
{
    //création d'une fonction pour récupérer les commentaires associés à un post
    public function getComments($post_id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id=? ORDER BY comment_date DESC');
        $comments ->execute(array($post_id));
        return $comments;
    }

    //enregistrement des commentaires en bdd
    public function postComment($post_id, $author, $content)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, content, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($post_id, $author, $content));
        return $affectedLines;
    }

    //création d'une fonction pour afficher les commentaires validés sur ce post

    //création d'une fonction pour enregistrer les commentaires en bdd
}