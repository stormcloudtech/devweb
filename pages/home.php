<?php 

    $postsRecentes = Blog::postsRecentes(3);

?>
<section class="main-bg">
    <div class="overlay"></div>
    <div class="container">
        <h2 class="wow bounceInLeft">Especialista em gerar resultados<br /> para o seu negócio!</h2>
        <p class="wow bounceInLeft">
            Soluções em desenvolvimento de aplicativos, sites e sistemas. Seu negócio estará em um outro patamar e receberá destaque perante a concorrência. Atendimento qualificado e diferenciado, focado nas suas necessidades.
		</p>
        <a href="contato.html" class="btn-contato wow bounceInLeft">
           Entre em Contato 
        </a>
        <!-- btn-contato -->
    </div>
    <!-- container -->
</section>
<!-- main-bg -->

<<<<<<< HEAD
	<section class="descricao-autor" id="descricao-autor">
		<div class="center">
		<div class="w50 left">
			<h2><?php echo $infoSite['nome_autor']; ?></h2>
			<p><?php echo $infoSite['descricao']; ?></p>
		</div><!--w50-->
		<div class="w50 left">
			<!--Pegar imagem depois-->
			<img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto.jpg" alt="Foto de guilherme grillo focando em seu rosto, sorrindo, com uma camisa xadrez em tom azul" title="Foto de Perfil Gulherme Grillo"  />
		</div><!--w50-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->
=======
<section class="servicos" id="servicos">
    <div class="container">
        <div class="line-text">
            <div style="width:75px;"></div>
            <h2>Serviços</h2>
        </div>
        <!-- line-text -->
        <div class="icones-servicos">
            <div class="box-icone-single wow bounceInDown">
                <h2 class="wow rubberBand"><i class="fas fa-laptop-code"></i></h2>
                <h3>Websites</h3>
                <p>
                    Websites, landing pages, lojas virtuais, portais, páginas de captura e intranets.
            </div>
            <!-- box-icone-single -->
            <div class="box-icone-single wow bounceInDown">
                <h2 class="wow rubberBand"><i class="fas fa-address-card"></i></h2>
                <h3>Sistemas</h3>
                <p>
                    Sistemas comerciais para cadastro de clientes, controle de estoque, gestão de funcionários, ERPs, integração com NF-e (Nota Fiscal Eletrônica).
            </div>
            <!-- box-icone-single -->
            <div class="box-icone-single wow bounceInDown">
                <h2 class="wow rubberBand"><i class="fas fa-mobile-alt"></i></i>
                </h2>
                <h3>Aplicativos</h3>
                <p>
                    Aplicativos de delivery, compras, guias comerciais, catálogos de venda, galeria de fotos, etc
                </p>
            </div>
            <div class="clear"></div>
        </div>
        <!-- icones-diferenciais -->
    </div>
    <!-- container -->
</section>
<!-- servicos -->
>>>>>>> f001704b51c2c6167f617e30d36ba6d9acc5fe8d

<section class="sobre-equipe" id="sobre-equipe">
    <div class="container">
        <div class="equipe-container">
            <div class="line-text">
                <div style="width:45px;"></div>
                <h2>Equipe</h2>
            </div>
            <!-- line-text -->
            <div class="avatar-box">
                <div class="img-avatar" style="background-image:url(<?= INCLUDE_PATH; ?>images/perfil.jpg);"></div>
                <div class="descricao-avatar">
                    <h3>Gustavo Alves</h3>
                    <p>Desenvolvedor Web Full-Stack</p>
                </div>
                <!-- descricao-avatar -->
            </div>
            <!-- avatar-box -->
        </div>
        <!-- equipe-container -->
        <div class="sobre-container">
            <div class="line-text">
                <div style="width:35px;"></div>
                <h2>Sobre</h2>
            </div>
            <!-- line-text -->

            <p>
                <?php if (strlen($infoSite['descricao']) > 720): ?>
                    <?= $infoSite['descricao'].'...'; ?>
                <?php else: ?>  
                    <?= $infoSite['descricao']; ?>
                <?php endif; ?>
            </p>
        </div>
        <!-- sobre-container -->
    </div>
    <!-- container -->
</section>
<!-- sobre-equipe -->

<section class="posts-recentes">
    <div class="container">
        <div class="line-text">
            <div style="width:35px;"></div>
            <h2>Posts Recentes</h2>
        </div>
        <!-- line-text -->
        
        <div class="posts-recentes-container">
            <?php foreach ($postsRecentes as $key => $post) : ?>
                <div class="posts-recentes-box-single wow bounceInUp">
                    <div class="posts-recentes-box-img">
                        <img src="<?= INCLUDE_PATH_PAINEL; ?>uploads/<?= $post['capa']; ?>" />
                    </div>
                    <!-- posts-recentes-box-img -->
                    <div class="posts-recentes-box-text">
                        <h4><?= $post['titulo']; ?></h4>
                        <p><?= substr(strip_tags($post['conteudo']), 0, 100).'...'; ?></p>
                    </div>
                    <!-- posts-recentes-box-text- -->
                    <?php $categoriaSlug = Blog::getCategoriaSlugByCategoriaId($post['categoria_id']); ?>
                    <a class="link-post" href="<?= INCLUDE_PATH.'blog/'.$categoriaSlug.'/'.$post['slug']; ?>"><i class="fas fa-book-reader"></i> Ler Post</a>
                    <div class="clear"></div>
                <div class="borda-baixo"></div>
            </div>
            <!-- posts-recentes-box-single -->
            <?php endforeach; ?>
        </div>
        <!-- posts-recentes-container -->
    </div>
    <!-- container -->
</section>
<!-- posts-recentes -->

<section class="contato">
    <div class="container">
        <div class="line-text">
            <div style="width:75px;"></div>
            <h2>Contato</h2>
        </div>
        <!-- line-text -->
        <form action="#" class="wow bounceInLeft">
            <div class="input-wrapper w100">
                <input type="text" placeholder="Nome*" name="nome" id="nome" required />
            </div>
            <!-- input-wrapper -->
            <div class="input-wrapper w50">
                <input type="email" placeholder="E-mail*" name="email" id="email" required />
            </div>
            <!-- input-wrapper -->
            <div class="input-wrapper w50">
                <input type="tel" placeholder="Telefone" name="telefone" id="telefone" required />
            </div>
            <!-- input-wrapper -->
            <div class="input-wrapper w100">
                <textarea placeholder="Mensagem*" required></textarea>
            </div>
            <!-- input-wrapper -->
            <div class="input-wrapper w100">
                <input class="btn-contato" type="submit" value="Enviar" />
            </div>
            <!-- input-wrapper -->
            <div class="clear"></div>
        </form>
    </div>
    <!-- container -->
</section>
<!-- contato -->