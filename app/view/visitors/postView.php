<?php $title= htmlspecialchars($post['title']); ?>

<?php

//Pour chaque post(id,title, intro, content, author, date_last_modified), ajouter:

?>

<?php ob_start(); ?>

<a href ="index.php">Retour à l'accueil</a>

<div class="posts">
<h3>
    <p><?php echo htmlspecialchars($post['title']);?><br/> 
    Le <?php echo htmlspecialchars($post['date_last_modified_fr']);?></p><br/>
    Par : <?php echo htmlspecialchars($post['author']);?></p>
    <p><?php echo nl2br (htmlspecialchars($post['intro'])); ?></p>
</h3>
    <p><?php echo htmlspecialchars($post['content']);?></p>


<?php //1.le formulaire qui permet de soummettre un commentaire pour validation ?>
    <h3>Ajoutez votre commentaire ici :</h3>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="POST">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="content">Commentaire</label><br />
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php //2.la liste des commentaires (validés) et publiés ?>
<?php
while ($comment = $comments->fetch())
{
    ?>
    <p><strong><?php echo htmlspecialchars($comment['author']) ?></strong> le <?php echo $comment['comment_date_fr'] ?></p>
    <p><?php echo nl2br(htmlspecialchars($comment['content'])) ?></p>
    <?php
}
?>

<?php $content = ob_get_clean();?>
<?php require('../app/view/templates/template.php');?>