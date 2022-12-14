<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?= ICONS_URL; ?>">
	<link rel="stylesheet" href="<?= INCLUDE_PATH_PAINEL ?>css/sweetalert2.min.css">
	<link href="<?= INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
</head>
	<body>
		<base base="<?= INCLUDE_PATH_PAINEL ?>">
		<div class="menu">
			<div class="menu-wraper">
			<div class="box-usuario">
				<?php
					if($_SESSION['img'] == ''){
				?>
					<div class="avatar-usuario">
						<i class="fas fa-user"></i>
					</div><!--avatar-usuario-->
				<?php }else{ ?>
					<div class="imagem-usuario">
						<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
					</div><!--avatar-usuario-->
				<?php } ?>
				<div class="nome-usuario">
					<p><?php echo $_SESSION['nome']; ?></p>
					<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
				</div><!--nome-usuario-->
			</div><!--box-usuario-->
			<div class="items-menu">
				<h2>Cadastro</h2>
				<a <?php selecionadoMenu('cadastrar-slides'); ?> <?php verificaPermissaoMenu(0); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>

				<h2>Gestão</h2>
				<a <?php selecionadoMenu('cadastrar-depoimento'); ?> <?php verificaPermissaoMenu(0); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
				<a <?php selecionadoMenu('listar-depoimentos'); ?> <?php verificaPermissaoMenu(0); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
				<a <?php selecionadoMenu('cadastrar-servico'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
				<a <?php selecionadoMenu('listar-servicos'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
				<a <?php selecionadoMenu('listar-slides'); ?> <?php verificaPermissaoMenu(0); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>

				<h2>Administração do painel</h2>
				<a <?php selecionadoMenu('editar-usuario'); ?> <?php verificaPermissaoMenu(0); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
				<a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
				<h2>Configuração Geral</h2>
				<a <?php selecionadoMenu('editar-site'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
				<a <?php selecionadoMenu('habilitar-funcoes'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>habilitar-funcoes">Habilitar Funções</a>

				<h2>Gestão de Notícias</h2>
				<a <?php selecionadoMenu('cadastrar-categorias'); ?> <?php verificaPermissaoMenu(1); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categorias">Cadastrar Categorias</a>
				<a <?php selecionadoMenu('gerenciar-categorias'); ?> <?php verificaPermissaoMenu(1); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
				<a <?php selecionadoMenu('cadastrar-noticias'); ?> <?php verificaPermissaoMenu(1); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticias">Cadastrar Notícias</a>
				<a <?php selecionadoMenu('gerenciar-noticias'); ?> <?php verificaPermissaoMenu(1); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Notícias</a>
			</div><!--items-menu-->
			</div><!--menu-wraper-->
		</div><!--menu-->

		<header>
			<div class="center">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!--menu-btn-->

				<div class="loggout">
					<a href="<?= INCLUDE_PATH ?>" target="_blank"> <i class="fas fa-eye"></i> <span>Ver Site</span></a>
					<a <?php if(@$_GET['url'] == ''){ ?> style="background: #60727a;padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fa fa-home"></i> <span>Página Inicial</span></a>
					<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fa fa-window-close"></i> <span>Sair</span></a>
				</div><!--loggout-->

				<div class="clear"></div>
			</div>
		</header>

		<div class="content">

			<?php Painel::carregarPagina(); ?>


		</div><!--content-->

		<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
		<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
		<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
		<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.form.min.js"></script>
		<!-- tinymce -->
		<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
		<!-- <script>
			tinymce.init({ 
				selector: '.tinymce',
				plugins: 'image',
				height: 300 
			});
		</script> -->
		<script src="<?= INCLUDE_PATH_PAINEL ?>js/helpermask.js"></script>
		<script src="<?= INCLUDE_PATH_PAINEL ?>js/sweetalert2.all.min.js"></script>
		<script src="<?= INCLUDE_PATH_PAINEL ?>js/promise-polyfill.js"></script>
		<script src="<?= INCLUDE_PATH_PAINEL ?>js/ajax.js"></script>
		<script src="<?= INCLUDE_PATH ?>js/constants.js"></script>
		<?php Painel::loadJS(array('clientes.js'),'gerenciar-clientes'); ?>
	</body>
</html>