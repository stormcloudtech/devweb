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
	<div class="sidebar">
			<div class="box-content-sidebar">
				<h3><i class="fa fa-search" aria-hidden="true"></i> Realizar uma busca</h3>
				<form method="POST">
					<input type="text" name="parametro" placeholder="O que deseja procurar?" required />
					<input type="submit" name="buscar" value="Pesquisar!" />
				</form>
			</div>
			<!-- box-content-sidebar -->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-list-ul" aria-hidden="true"></i> Selecione a categoria</h3>
				<form>
					<select name="categoria">
						<option value="">Todas as categorias</option>
						<?php 
							$categorias = Blog::getAllCategories();
							
							foreach($categorias as $key => $value) :
						?>
							<option <?php if (isset($url[1]) && $value['slug'] == $url[1]) echo 'selected'; ?> value="<?= $value['slug']; ?>"><?= $value['nome']; ?></option>
						<?php endforeach; ?>
					</select>
				</form>
			</div>
			<!-- box-content-sidebar -->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-user" aria-hidden="true"></i> Sobre o autor</h3>
				<div class="autor-box-portal">
					<div class="box-img-autor"></div>
					<!-- box-img-autor -->
					<div class="texto-autor-portal text-center">
						<?php 
							$infoSite = MySql::conectar()->prepare('SELECT * FROM `tb_site.config`');
							$infoSite->execute();
							$infoSite = $infoSite->fetch();
						?>
						<h3><?= $infoSite['nome_autor']; ?></h3>
						<p><?= substr($infoSite['descricao'], 0, 400).'...' ?><a href="<?= INCLUDE_PATH; ?>sobre-equipe">Saiba Mais</a></p>
					</div>
					<!-- texto-autor-portal -->
				</div>
				<!-- autor-box-portal -->
			</div>
			<!-- box-content-sidebar -->
		</div>
		<!-- sidebar -->
	<div class="container" style="width: 70%; float: left; padding: 50px">
		<header>
			<h1><i class="fa fa-calendar" style="font-size: 22px;"></i> <span style="font-size: 26px;"><?= date('d/m/Y', strtotime($post['data'])); ?></span> - <?= $post['titulo']; ?></h1>
		</header>
		<article>

			<?= $post['conteudo']; ?>

		</article>
	</div>
	<!-- container -->
	<div class="clear"></div>
	<!-- clear -->
</section>
<!-- noticia-single -->
