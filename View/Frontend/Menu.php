<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i>Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-book-open"></i>Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact</a>
      </li>
    </ul>
    <span class="navbar-text">
      Site de Jean Forteroche - Ecrivain
    </span>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	
	<img src="images/write.jpg" class="d-block w-100" alt="image de fond du slider">
	<div id="textarea-carousel"><p>Bienvenu sur mon site internet</p></div>
		
    </div>
  </div>
</div>

<h1>Les Articles</h1>
<div id="exemple-card">	
	<div class="card" style="width: 18rem;">
		<img src="images/exemple.jpg" class="card-img-top" alt="image d'illustration">
			<div class="card-body">
				<h5 class="card-title">Chapitre 1</h5>
				<p class="card-text">Lorem iggpsum dolor sit amefhht, consectetur adipiscing elit. Integer ultricies leo justo, et feugiat ligula tincidunt ac. Aliquam auctor gravida egestas. Donec iaculis ligula sit amet quam blandit tempus.</p>
				<a href="#" class="btn btn-primary">Lire l'article</a>
			</div>
	</div>

	<div class="card" style="width: 18rem;">
		<img src="images/exemple.jpg" class="card-img-top" alt="image d'illustration">
			<div class="card-body">
				<h5 class="card-title">Chapitre 2</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies leo justo, et feugiat ligula tincidunt ac. Aliquam auctor gravida egestas. Donec iaculis ligula sit amet quam blandit tempus.</p>
				<a href="#" class="btn btn-primary">Lire l'article</a>
			</div>
	</div>

	<div class="card" style="width: 18rem;">
		<img src="images/exemple.jpg" class="card-img-top" alt="image d'illustration">
			<div class="card-body">
				<h5 class="card-title">Chapitre 3</h5>
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies leo justo, et feugiat ligula tincidunt ac. Aliquam auctor gravida egestas. Donec iaculis ligula sit amet quam blandit tempus.</p>
				<a href="#" class="btn btn-primary">Lire l'article</a>
			</div>
	</div>
</div>
	

	



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>