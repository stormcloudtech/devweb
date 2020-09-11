<?php 

    $postsRecentes = Blog::postsRecentes(3);
    $blogFunction = Painel::searchFunction('blog');
    $services = Servico::getAllServices();
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

<section class="servicos" id="servicos">
    <div class="container">
        <div class="line-text">
            <div style="width:75px;"></div>
            <h2>Serviços</h2>
        </div>
        <!-- line-text -->
        <div class="icones-servicos">
            <?php foreach($services as $service) : ?>
                <div class="box-icone-single wow bounceInDown">
                    <h2 class="wow rubberBand"><i class="<?= $service['icone_servico'] ?>"></i></h2>
                    <h3><?= $service['titulo_servico'] ?></h3>
                    <p>
                        <?= $service['descricao_servico'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
        <!-- icones-diferenciais -->
    </div>
    <!-- container -->
</section>
<!-- servicos -->

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
                <?php 
                    if (isset($infoSite['descricao'])) {

                        if (strlen($infoSite['descricao']) > 720) {
                            echo $infoSite['descricao'].'...';
                        } else {
                            echo $infoSite['descricao'];
                        }

                    } else {

                        echo 'Add website decription here';

                    }

                ?>
            </p>
        </div>
        <!-- sobre-container -->
    </div>
    <!-- container -->
</section>
<!-- sobre-equipe -->

<?php if ($blogFunction['habilitada'] == 1): ?>
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
<?php endif; ?>

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