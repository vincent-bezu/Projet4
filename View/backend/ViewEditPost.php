<?php $title = 'Modifier article'; ?>
<?php ob_start(); ?>
<h1>Modifier l'article</h1>
<form class="newPostForm" action="../../View/backend/router.php?action=editPost" method="post">
  <div class="form-group">
    <label for="title">TITRE</label>
    <input type="text" class="form-control" id="newTitle" placeholder="Entrez le titre ici" name="title" <?= htmlspecialchars($data['title']) ?>>
  </div>
  
  <div class="form-group">
    <label for="text">Texte</label>
    <textarea class="form-control tinyTextArea" id="newText" name="content" rows="5" <?= htmlspecialchars($data['content'],0,50) ?>></textarea>
  </div>

  <button type="submit" class="btn btn-outline-success">Modifier</button>

</form>
<?php $content = ob_get_clean(); ?>

<?php require('TemplateB.php'); ?>