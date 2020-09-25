


<div class="box-content">


	<h2><i class="fas fa-pencil-alt"></i> Adicionar Serviço</h2>

	<form method="post" enctype="multipart/form-data">

		<?php 

		if (isset($_POST['acao'])) {
			if ($_POST['icone_servico'] == '' || $_POST['titulo_servico'] == ''|| $_POST['descricao_servico'] == '' || $_POST['order_id'] == '') {
				Painel::alert('erro', 'Preencha os campos obrigatórios!');
			} else {
				$serviceInfo = [
					addslashes($_POST['icone_servico']),
					addslashes($_POST['titulo_servico']),
					addslashes($_POST['descricao_servico']),
					addslashes($_POST['order_id']),
					$_POST['background_icones']
				];
				
				if(Servico::insertService($serviceInfo)){
					Painel::alert('sucesso', 'O cadastro do serviço foi realizado com sucesso!');
				}else{
					Painel::alert('erro', 'Falha ao cadastrar serviço!');
				}
			}
		}

		?>

		<div class="form-group">
			<label>Ícone do Serviço:</label>
			<input type="text" name="icone_servico" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Cor de Fundo do Ícone:</label>
			<input type="color" name="background_icones" value="#c474ae" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Título do Servico:</label>
			<input type="text" name="titulo_servico" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do Servico:</label>
			<textarea name="descricao_servico"></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>
	<!-- form-servicos -->


</div><!--box-content-->