<?php 

require_once 'forms-config.php';

$nome = addslashes($_POST['nome']);
$emailCliente = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

if (!empty($nome) || !empty($emailCliente) || !empty($telefone) || !empty($mensagem)) {

    $email = new Email('smtp.gustavoalvesdev.com.br', 'contato@gustavoalvesdev.com.br', 'DeusProtetor2018', 'Formulário de Contato do Site');
    $email->addAddress('contato@gustavoalvesdev.com.br', $nome);

    $info = array(
        'assunto' => 'Contato Via Site',
        'corpo' => 'E-mail: '.$emailCliente.'<br />Nome: '.$nome.'<br />'.$telefone.'<br />Mensagem: '.$mensagem
    );

    $email->formatarEmail($info);

    if ($email->enviarEmail()) {
        $data['mensagem'] = 'E-mail enviado com sucesso! Entraremos em contato em breve';
    } else {
        $data['sucesso'] = false;
        $data['mensagem'] = 'Falha ao enviar e-mail! Tente novamente mais tarde ou entre em contato pelo e-mail: contato@gustavoalvesdev.com.br';
    }

} else {
    $data['sucesso'] = false;
    $data['mensagem'] = 'Todos os campos devem ser preenchidos!';
}

die(json_encode($data));