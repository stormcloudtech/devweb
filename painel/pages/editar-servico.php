<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$servico = Painel::select('tb_site.servicos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
 ?>
<div class="box-content">
	<h2><i class="fas fa-pencil-alt"></i> Editar Serviço</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('sucesso','O serviço foi editado com sucesso!');
					$servico = Painel::select('tb_site.servicos','id = ?',array($id));
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Ícone do Servico:</label>
			<input type="text" name="icone_servico" value="<?= $servico['icone_servico'] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Título do Servico:</label>
			<input type="text" name="titulo_servico" value="<?= $servico['titulo_servico'] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do Servico:</label>
			<textarea name="descricao_servico"><?php echo $servico['descricao_servico']; ?></textarea>
		</div><!--form-group-->



		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="nome_tabela" value="tb_site.servicos" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->