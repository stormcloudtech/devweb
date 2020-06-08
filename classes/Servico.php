<?php 

class Servico
{
	public static function insertService($serviceInfo)
	{
		$sql = MySql::conectar()->prepare('INSERT INTO `tb_site.servicos` (icone_servico, titulo_servico, descricao_servico) VALUES(?, ?, ?)');
		if ($sql->execute($serviceInfo))
			return true;
		return false;
	}
}
