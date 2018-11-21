<?php $title= 'Les derniers posts'; ?>

<?php ob_start(); ?>

<?php
//aperçu des posts (id, title, intro, date_last_modified) avec fonction listPostsView -> rajouter pour chacun le lien vers le contenu détaillé du post en question
while ($data = $posts->fetch())
{
?>

<div class="posts">
<h3>
    <p><?php echo htmlspecialchars($data['title']);?><br/> 
    Le <?php echo htmlspecialchars($data['date_last_modified_fr']);?></p>
    <p><?php echo nl2br (htmlspecialchars($data['intro'])); ?></p>
</h3>
    <p><a href='index.php?action=post&id=<?=$data['id'];?>'>Lire l'intégralité du post</a></p>
</div>

<?php
}
//rajouter pagination pour n'afficher que les 6 premiers aperçus sur la page d'accueil

$posts->closeCursor();?>
<?php $content = ob_get_clean();?>
<?php require('../app/view/templates/template.php');?>


