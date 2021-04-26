<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<?php
	$infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
	$infoSite->execute();
	$infoSite = $infoSite->fetch();
	$blogFunction = Painel::searchFunction('blog');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $infoSite['titulo'] ?></title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= INCLUDE_PATH_PAINEL ?>css/sweetalert2.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/animate.css" />
	<link rel="stylesheet" href="<?= ICONS_URL; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website" />
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.png" type="image/png" />
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

			case 'contato':
				echo '<target target="contato" />';
				break;
		}
	?>
	<div class="barra-topo">
		<div class="container">
			<div class="box-contato w50 left">
				<p><i class="fab fa-whatsapp"></i> (11) 99653-1308</p>
			</div>
			<div class="box-contato w50 right text-right">
				<p><i class="fas fa-envelope"></i> contato@gustavoalvesdev.com.br</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<header>
		<div class="container">
			<a href="<?= INCLUDE_PATH; ?>"><div class="logo left" <?= ($infoSite['logo_empresa']) ? 'style="background-image: url('.INCLUDE_PATH_PAINEL.'uploads'.'/'.$infoSite['logo_empresa'].')"' : ''; ?>><?= $infoSite['titulo']; ?></div><!--logo--></a>
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre-equipe">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<?php if ($blogFunction['habilitada'] == 1): ?>
						<li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
					<?php endif; ?>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="mobile right">
			 	<div class="botao-menu-mobile">
			 		<i class="fa fa-bars" aria-hidden="true"></i>
			 	</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre-equipe">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<?php if ($blogFunction['habilitada'] == 1): ?>
						<li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
					<?php endif; ?>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
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
			if($url[0] != 'servicos' && $url[0] != 'sobre-equipe' && $url[0] != 'contato'){
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
                    <h5>Onde Estamos</h5>
                    <p><?= ($infoSite['endereco_empresa_1']) ? $infoSite['endereco_empresa_1'] : 'Endereço Linha 1' ?></p>
                    <p><p><?= ($infoSite['endereco_empresa_2']) ? $infoSite['endereco_empresa_2'] : 'Endereço Linha 2' ?></p></p>
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
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<?php if (strstr($url[0], 'blog')) : ?>
		<script>
			$(function(){
				$('select').change(function(){
					location.href = include_path + 'blog/' + $(this).val();
				});
			});
		</script>
	<?php endif; ?>
</body>
</html>