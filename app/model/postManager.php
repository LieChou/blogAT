<?php

require_once('manager.php');

class PostManager extends Manager
{
    //création d'une fonction pour récupérer tous les posts (pour listPosts)
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, intro, DATE_FORMAT(date_last_modified, \'%d/%m/%Y à %Hh%imin%ss\') AS date_last_modified_fr FROM posts ORDER BY date_last_modified DESC');
        return $req;
    }

    //création d'une fonction pour récupérer un post
    public function getPost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, author, intro, content, DATE_FORMAT(date_last_modified, \'%d/%m/%Y à %Hh%imin%ss\') AS date_last_modified_fr FROM posts WHERE id=?');
        $req->execute(array($id));
        $post = $req->fetch();
        return $post;
    }
}