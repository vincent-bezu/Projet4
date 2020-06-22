<?php $title = 'Nouvel article'; ?>
<?php ob_start(); ?>
<h1>Nouvel Article</h1>
<?php $content = ob_get_clean(); ?>

<?php require('TemplateB.php'); ?>