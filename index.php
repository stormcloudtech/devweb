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
<<<<<<< HEAD
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Gustavo Alves da Silva" />
	<meta name="keywords" content="sistemas web,websites,lojas virtuais,desenvolvimento de sites em são paulo,fazer site,site grátis,web design,vender mais" />
	<meta name="description" content="Website da conceituada agência de desenvolvimento web Danki Code. Entre em contato: (11) 99653-1308" />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
=======
	<!-- <link rel="stylesheet" href="<?php // echo INCLUDE_PATH; ?>estilo/font-awesome.min.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/animate.css" />
	<link rel="stylesheet" href="<?= ICONS_URL; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website" />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.png" type="image/png" />
>>>>>>> f001704b51c2c6167f617e30d36ba6d9acc5fe8d
	<meta charset="utf-8" />
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url[0] = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url[0]) {
			case 'servicos':
				echo '<target target="servicos" />';
				break;

			case 'sobre-equipe':
				echo '<target target="sobre-equipe" />';
				break;
		}
	?>
	<div class="sucesso">Formulário enviado com sucesso!</div>
	<!-- <div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
	</div><!--overlay-loading--> 

	<header>
		<div class="container">
			<a href="<?= INCLUDE_PATH; ?>"><div class="logo left"><?= $infoSite['titulo']; ?></div><!--logo--></a>
			<nav class="desktop right">
				<ul>
<<<<<<< HEAD
					<li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a title="Notícias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
					<li><a title="Contato" realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
=======
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre-equipe">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
>>>>>>> f001704b51c2c6167f617e30d36ba6d9acc5fe8d
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
<<<<<<< HEAD
					<li><a title="Home" href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a title="Depoimentos" href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
					<li><a title="Serviços" href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a title="Notícias" href="<?php echo INCLUDE_PATH; ?>noticias">Notícias</a></li>
					<li><a title="Contato" realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
=======
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre-equipe">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>Blog">Blog</a></li>
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
>>>>>>> f001704b51c2c6167f617e30d36ba6d9acc5fe8d
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div>
		<!-- container -->
	</header>

	<div class="container-principal">
	<?php

		if(file_exists('pages/'.$url[0].'.php')){
			include('pages/'.$url[0].'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url[0] != 'servicos' && $url[0] != 'sobre-equipe'){
				$urlPar = explode('/', $url[0])[0];
				if ($urlPar != 'blog') {
					$pagina404 = true;
					require_once 'pages/404.php';
				} else {
					require_once 'pages/blog.php';
				}
				
			}else{
				require_once 'pages/home.php';
			}
		}

	?>

	</div><!--container-principal-->

	<footer class="footer">
        <section class="footer-links">
            <div class="container">
                <div class="endereco">
                    <h5>Aonde Estamos</h5>
                    <p>Rua dos Goivos, 19 - CEP: 08544-100</p>
                    <p>(11) 99653-1308</p>
                </div>
                <!-- endereco -->
                <div class="links">
                    <h5>Links Úteis</h5>
                    <p><a href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a></p>
                </div>
                <!-- links -->
                <div class="redes">
                    <h5>Conecte-se Conosco</h5>
                    <p><a href="#"><i class="fab fa-facebook-square"></i></a><a href="#"><i class="fab fa-instagram"></i></a></p>
                </div>
                <!-- redes -->
            </div>
            <!-- container -->
        </section>
        <!-- footer-links -->
        <section class="footer-direitos">
            <div class="container">
                <p>Todos os direitos reservados</p>
            </div>
            <!-- container -->
        </section>
        <!-- footer-direitos -->
    </footer>
    <!-- footer -->

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/wow.min.js"></script>
	<script type="text/javascript">
		wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 100
        });

        wow.init();
	</script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php if (strstr($url[0], 'blog')) : ?>
		<script>
			$(function(){
				$('select').change(function(){
					location.href = include_path + 'blog/' + $(this).val();
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