<section class="contato">
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
                    $headers = "From: $myEmail\r\n";
                    $headers .= "Reply-To: $email\r\n";

                    $corpo = "Formulário de Contato do Site\n";
                    $corpo .= "Nome: " . $nome . "\n";
                    $corpo .= "Email: " . $email . "\n";
                    $corpo .= "Mensagem: " . $mensagem . "\n";

                    $status = mail($myEmail, 'Mensagem via Site', $corpo, $headers);

                    if ($status) {
                        $_SESSION['form-sent-contact'] = true;
                        header('Location: '.INCLUDE_PATH.'contato');
                    } else {
                        $_SESSION['form-sent-contact'] = false;
                        header('Location: '.INCLUDE_PATH.'contato');
                    }
                } else {
                    $_SESSION['form-sent-contact'] = 'empty-fields';
                    header('Location: '.INCLUDE_PATH.'contato');
                }

                unset($_POST['acao']);
            }
        ?>

        <?php 
                if (isset($_SESSION['form-sent-contact'])) {
                    if ($_SESSION['form-sent-contact'] == true) {
                        echo "<script> alert('Formulário enviado com sucesso!');</script>";
                    } else if ($_SESSION['form-sent-contact'] == false) {
                        echo "<script> alert('Falha ao enviar o Formulário.');</script>";
                    } else if ($_SESSION['form-sent-contact'] == 'empty-fields') {
                        echo "<script> alert('Todos os campos devem ser preenchidos!');</script>";
                    }
                    unset($_SESSION['form-sent-contact']);
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
    </div>
    <!-- container -->
</section>
<!-- contato -->