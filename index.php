<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<?php
	$infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
	$infoSite->execute();
	$infoSite = $infoSite->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $infoSite['titulo']; ?></title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Gustavo Alves da Silva" />
	<meta name="keywords" content="sistemas web,websites,lojas virtuais,desenvolvimento de sites em são paulo,fazer site,site grátis,web design,vender mais" />
	<meta name="description" content="Website da conceituada agência de desenvolvimento web Danki Code. Entre em contato: (11) 99653-1308" />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url[0] = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url[0]) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;

			case 'descricao-autor':
				echo '<target target="descricao-autor" />';
				break;
		}
	?>
	<div class="sucesso">Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
	</div><!--overlay-loading-->

	<header>
		<div class="center">
			<div class="logo left"><a href="<?= INCLUDE_PATH; ?>">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a title="Notícias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
					<li><a title="Contato" realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a title="Notícias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
					<li><a title="Contato" realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>

	<div class="container-principal">
	<?php

		if(file_exists('pages/'.$url[0].'.php')){
			include('pages/'.$url[0].'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url[0] != 'depoimentos' && $url != 'servicos' && $url != 'descricao-autor'){
				$urlPar = explode('/', $url[0])[0];
				if ($urlPar != 'noticias') {
					$pagina404 = true;
					require_once 'pages/404.php';
				} else {
					require_once 'pages/noticias.php';
				}
				
			}else{
				require_once 'pages/home.php';
			}
		}

	?>

	</div><!--container-principal-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php if (strstr($url[0], 'noticias')) : ?>
		<script>
			$(function(){
				$('select').change(function(){
					location.href = include_path + 'noticias/' + $(this).val();
				});
			});
		</script>
	<?php endif; ?>
	<?php
		if($url[0] == 'contato'){
	?>
	<?php } ?>
	<!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>