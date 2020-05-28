<?php 
	$url = explode('/', $_GET['url']);
	if (!isset($url[2])) :
?>
<section class="header-noticias">
	<div class="center">
		<h2><i class="fa fa-bell-o" aria-hidden="true"></i></h2>
		<h2>Acompanhe as últimas <b>notícias do portal</b></h2>
	</div>
	<!-- center -->
</section>
<!-- header-noticias -->
<section class="container-portal">
	<div class="center">
		<div class="sidebar">
			<div class="box-content-sidebar">
				<h3><i class="fa fa-search" aria-hidden="true"></i> Realizar uma busca</h3>
				<form>
					<input type="text" name="busca" placeholder="O que deseja procurar?" required />
					<input type="submit" name="acao" value="Pesquisar!" />
				</form>
			</div>
			<!-- box-content-sidebar -->
			<div class="box-content-sidebar">
				<h3><i class="fa fa-list-ul" aria-hidden="true"></i> Selecione a categoria</h3>
				<form>
					<select name="categoria">
						<option value="esportes">Esportes</option>
						<option value="geral">Geral</option>
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
						<h3>Gustavo Alves</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamc</p>
					</div>
					<!-- texto-autor-portal -->
				</div>
				<!-- autor-box-portal -->
			</div>
			<!-- box-content-sidebar -->
		</div>
		<!-- sidebar -->

		<div class="conteudo-portal">
			<div class="header-conteudo-portal">
				<!-- <h2>Visualizando todos os Posts</h2> -->
				<h2>Visualizando posts em <span>Esportes</span></h2>
			</div>
			<!-- header-conteudo-portal -->
			<?php 
				for($i = 0; $i < 5; $i++) :
			?>
			<div class="box-single-conteudo">
				<h2>27/05/2020 - Conheça os eleitos para ga...</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<a href="<?= INCLUDE_PATH; ?>noticias/esportes/nome-do-post">Leia mais</a>
			</div>
			<!-- box-single-conteudo -->
			<?php 
				endfor;
			?>
			<div class="paginator">
				<a class="active-page" href="#">1</a>
				<!-- active-page -->
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
			</div>
			<!-- paginator -->
		</div>
		<!-- conteudo-portal -->

		<div class="clear"></div>
		<!-- clear -->
	</div>
	<!-- center -->
</section>
<!-- container-portal -->
<?php
	else:
		require_once 'noticia_single.php';
	endif;
?>