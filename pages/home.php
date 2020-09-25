<?php 

    $postsRecentes = Blog::postsRecentes(3);
    $blogFunction = Painel::searchFunction('blog');
    $services = Servico::getAllServices();
?>
<section class="main-bg" <?= ($infoSite['banner_background']) ? 'style="background-image: url('.INCLUDE_PATH_PAINEL.'uploads'.'/'.$infoSite['banner_background'].')"' : ''; ?>>
    <div class="overlay"></div>
    <div class="container">
        <h2 class="wow bounceInLeft" style="color:<?= $infoSite['cor_titulo'] ?>"><?= ($infoSite['titulo_banner']) ? $infoSite['titulo_banner'] : 'Título do Banner' ?></h2>
        <p class="wow bounceInLeft">
            <?= ($infoSite['texto_banner']) ? $infoSite['texto_banner'] : 'Texto do Banner' ?>
		</p>
        <a href="<?= INCLUDE_PATH ?>contato" class="btn-contato wow bounceInLeft">
        <?= ($infoSite['texto_botao']) ? $infoSite['texto_botao'] : 'Texto do Botão' ?>
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
                    <h2 class="wow rubberBand" <?= ($service['background_icones']) ? 'style="background-color:'.$service['background_icones'].'"' : '' ?>><i class="<?= $service['icone_servico'] ?>"></i></h2>
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

<section class="posts-recentes">
        <div class="container">
            <div class="line-text">
                <div style="width:35px;"></div>
                <h2>Portfólio</h2>
            </div>
            <!-- line-text -->
            <div class="posts-recentes-container">
                <div class="posts-recentes-box-single wow bounceInUp">
                    <div class="posts-recentes-box-img">
                        <img src="<?= INCLUDE_PATH ?>images/portfolio/einstein.PNG" />
                    </div>
                    <!-- card-box-img -->
                    <div class="posts-recentes-box-text">
                        <h4>Einstein Tribute Page</h4>
                        <p>Página Simples em HTML e CSS, um tributo ao físico Albert Einstein.</p>
                    </div>
                    <!-- card-box-text- -->
                    <a class="link-post" target="_blank" href="https://gustavoalvesdev.github.io/einstein"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="posts-recentes-box-single wow bounceInUp">
                    <div class="posts-recentes-box-img">
                        <img src="<?= INCLUDE_PATH ?>images/portfolio/kami.PNG" />
                    </div>
                    <!-- card-box-img -->
                    <div class="posts-recentes-box-text">
                        <h4>Site Kami Comunicação Visual</h4>
                        <p>Site desenvolvido com HTML, CSS, JavaScript e jQuery. Ferramenta de chat online utilizando Tawk.to.</p>
                    </div>
                    <!-- card-box-text -->
                    <a class="link-post" target="_blank" href="https://kamicomunicacao.github.io"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="posts-recentes-box-single wow bounceInUp">
                    <div class="posts-recentes-box-img">
                        <img src="<?php INCLUDE_PATH ?>images/portfolio/beemind.PNG " />
                    </div>
                    <!-- card-box-img -->
                    <div class="posts-recentes-box-text">
                        <h4>Template para Portfólio</h4>
                        <p>Template HTML, CSS e JavaScript puro, construído para criar meu portfólio (este site).</p>
                    </div>
                    <!-- card-box-text -->
                    <a target="_blank" class="link-post" href="https://gustavoalvesdev.github.io/template-beemind/"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
                <div class="posts-recentes-box-single wow bounceInUp">
                    <div class="posts-recentes-box-img">
                        <img src="<?php INCLUDE_PATH ?>images/portfolio/netflix-clone.PNG " />
                    </div>
                    <!-- card-box-img -->
                    <div class="posts-recentes-box-text">
                        <h4>Clone Netflix</h4>
                        <p>Clone da página de apresentação da Netflix Brasil, feito com flexbox e javascript puro.</p>
                    </div>
                    <!-- card-box-text -->
                    <a target="_blank" class="link-post" href="https://gustavoalvesdev.github.io/netflix-clone/"><i class="fas fa-eye"></i> Ver Projeto</a>
                    <div class="clear"></div>
                    <div class="borda-baixo"></div>
                </div>
                <!-- card-box-single -->
            </div>
            <!-- cards-container -->
        </div>
        <!-- container -->
    </section>
    <!-- cards -->

<section class="contato" id="contato">
    <div class="container">
        <div class="line-text">
            <div style="width:75px;"></div>
            <h2>Contato</h2>
        </div>
        <!-- line-text -->
        <?php 

            if (isset($_POST['acao'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $telefone = addslashes($_POST['telefone']);
                $mensagem = addslashes($_POST['mensagem']);

                if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($mensagem)) {

                    $myEmail = "contato@gustavoalvesdev.com.br";
                    $headers = "From: $emai\r\n";
                    $headers .= "Reply-To: $email\r\n";

                    $corpo = "Formulário de Contato do Site\n";
                    $corpo .= "Nome: " . $nome . "\n";
                    $corpo .= "Email: " . $email . "\n";
                    $corpo .= "Mensagem: " . $mensagem . "\n";

                    $status = mail($myEmail, 'Mensagem via Site', $corpo, $headers);

                    if ($status) {
                        $_SESSION['form-sent'] = true;
                        header('Location: '.INCLUDE_PATH.'?form-sent=true');
                    } else {
                        $_SESSION['form-sent'] = false;
                        header('Location: '.INCLUDE_PATH.'?form-sent=false');
                    }
                } else {
                    $_SESSION['form-sent'] = 'empty-fields';
                    header('Location: '.INCLUDE_PATH.'?form-sent=false');
                }

                unset($_POST['acao']);
            }
        ?>

        <?php 
                if (isset($_SESSION['form-sent'])) {
                    if ($_SESSION['form-sent'] == true) {
                        echo "<script> alert('Formulário enviado com sucesso!');</script>";
                    } else if ($_SESSION['form-sent'] == false) {
                        echo "<script> alert('Falha ao enviar o Formulário.');</script>";
                    } else if ($_SESSION['form-sent'] == 'empty-fields') {
                        echo "<script> alert('Todos os campos devem ser preenchidos!');</script>";
                    }
                    unset($_SESSION['form-sent']);
                }
        ?>
        <form method="POST" class="wow bounceInLeft">
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
                <textarea placeholder="Mensagem*" name="mensagem" required></textarea>
            </div>
            <!-- input-wrapper -->
            <div class="input-wrapper w100">
                <input class="btn-contato" type="submit" name="acao" value="Enviar" />
            </div>
            <!-- input-wrapper -->
            <div class="clear"></div>
        </form>
        <!-- form-contatos -->
    </div>
    <!-- container -->
</section>
<!-- contato -->