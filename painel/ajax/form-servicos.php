<?php 

require_once 'forms-config.php';
				
$serviceInfo = [
    addslashes($_POST['icone_servico']),
    addslashes($_POST['titulo_servico']),
    addslashes($_POST['descricao_servico']),
    addslashes($_POST['order_id'])
];

if(Servico::insertService($serviceInfo)){
    $data['mensagem'] = 'O cadastro do serviço foi realizado com sucesso!';
}else{
    $data['sucesso'] = false;
    $data['mensagem'] = 'Campos vazios não são permitidos!';
}

die(json_encode($data));
