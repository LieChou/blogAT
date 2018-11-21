<?php

require ('../app/controller/visitors/postController.php');
require ('../app/controller/visitors/commentController.php');

try{
    if(isset($_GET['action']))
    {
        if($_GET['action']=='listPosts')
        {
            listPosts();
        }
        elseif($_GET['action']=='post')
        {
            if(isset($_GET['id']) && $_GET['id'] >0)
            {
                post();
            }
            else
            {
                throw new Exception('Aucun identifiant de post n\'a pu être identifié');
            }
        }
        elseif($_GET['action']=='addComment')
        {
            if(isset($_GET['id']) && $_GET['id']>0)
            {
                if(!empty($_POST['author']) && !empty($_POST['content']))
                {
                    addComment($_GET['id'], $_POST['author'], $_POST['content']);
                }
                else
                {
                    throw new Exception('Tous les champs ne sont pas remplis');
                }
            }
            else
            {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
        
        //elseif listCommentsValidated
    else
    {
        listPosts();
    }
}
catch(Exception $e)
{
    echo 'Erreur: ' . $e->getMessage();
}

