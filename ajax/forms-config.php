<?php 

session_start();
date_default_timezone_set('America/Sao_Paulo');

sleep(2);

$autoload = function($class){
	if($class == 'Email'){
		require_once('../classes/phpmailer/PHPMailerAutoLoad.php');
	}
	include('../classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH','http://localhost/devweb/');
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

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
