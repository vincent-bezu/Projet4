<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>
<h1><?= htmlspecialchars($post['title']) ?></h1>

<p><em>le <?= $post['creation_date_fr'] ?></em></p>
<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

<h2>Commentaires</h2>

<?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <p><a href="<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
        <?php
        }
        ?>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
  <div class="form-group">
    <label for="author">Auteur</label>
    <input type="text" class="form-control" id="Author">
    <small id="AuthorHelp" class="form-text text-muted">Votre nom sera visible par l'ensemble des utilisateurs.</small>
  </div>
  <div class="form-group">
    <label for="Comment">Commentaire</label>
    <textarea class="form-control" id="Comment" name="Comment"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>