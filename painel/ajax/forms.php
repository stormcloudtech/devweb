<?php 

session_start();
date_default_timezone_set('America/Sao_Paulo');

sleep(2);

$autoload = function($class){
	if($class == 'Email'){
		require_once('../../classes/phpmailer/PHPMailerAutoLoad.php');
	}
	include('../../classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH','http://localhost/devweb/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

define('BASE_DIR_PAINEL', 'C:\\xampp\\htdocs\\devweb\\painel\\uploads\\');


//Conectar com banco de dados!
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','projeto_01');

$data['sucesso'] = true;
$data['mensagem'] = '';

if (Painel::logado() == false) {
	die('Você não está logado!');
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$tipo = $_POST['tipo_cliente'];
$cpf = '';
$cnpj = '';

if ($tipo == 'fisico') {
	$cpf = $_POST['cpf'];
} elseif ($tipo == 'juridico') {
	$cnpj = $_POST['cnpj'];
}

$imagem = '';

if ($nome == '' || $email == '' || $tipo == '') {
	$data['sucesso'] = false;
	$data['mensagem'] = 'Atenção: Campos vazios não são permitidos!';
}

if (isset($_FILES['imagem'])) {
	if (Painel::imagemValida($_FILES['imagem'])) {	
		$imagem = $_FILES['imagem'];
	} else {
		$data['sucesso'] = false;
		$data['mensagem'] = 'Você está tentando realizar um upload com imagem inválida';
	}
}

if ($data['sucesso']) {
	// tudo okay, só cadastrar
	if (is_array($imagem)) {
		$imagem = Painel::uploadFile($imagem);
	}
	$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.clientes` VALUES(null, ?, ?, ?, ?, ?)');
	$dadoFinal = ($cpf == '') ? $cnpj : $cpf;
	$sql->execute(array($nome, $email, $tipo, $dadoFinal, $imagem));
}

die(json_encode($data));
