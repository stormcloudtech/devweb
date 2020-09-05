<?php 
	$url = explode('/', $_GET['url']);
	$categoriaExiste = Blog::categoriaExiste($url[1]);
	$categoriaId = Blog::getCategoriaId($url[1]);
	$postExiste = Blog::postExiste($url[2], $categoriaId);

	if (!$categoriaExiste)
		Painel::redirect(INCLUDE_PATH.'blog');
	else {
		if (!$postExiste)
			Painel::redirect(INCLUDE_PATH.'blog');
		else
			$post = Blog::getPost($url[2], $categoriaId);
	}

?>
<section class="noticia-single">
	<div class="container">
		<header>
			<h1><i class="fa fa-calendar" style="font-size: 22px;"></i> <span style="font-size: 26px;"><?= date('d/m/Y', strtotime($post['data'])); ?></span> - <?= $post['titulo']; ?></h1>
		</header>
		<article>

			<?= $post['conteudo']; ?>

		</article>
	</div>
	<!-- container -->
	
</section>
<!-- noticia-single -->
