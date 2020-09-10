<?php 
    $funcoes = Painel::selectFunctions();
?>

<div class="box-content">
	<h2><i class="fas fa-pencil-alt"></i> Habilitar Funções do Site</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				$funcaoHabilitada = $_POST['habilitar_funcoes'];
				$funcao_id = $_POST['funcao_id'];
				if(Painel::alterFunction($funcao_id, $funcaoHabilitada)) {
					if ($funcaoHabilitada == 0) {
						Painel::alert('sucesso','Função desabilitada com sucesso!');
						$funcoes = Painel::selectFunctions();
					} else if ($funcaoHabilitada == 1) {
						Painel::alert('sucesso','Função habilitada com sucesso!');
						$funcoes = Painel::selectFunctions();
					}
				} else {
					if ($funcaoHabilitada == 0) {
						Painel::alert('erro','Erro ao desabilitar função!');
						$funcoes = Painel::selectFunctions();
					} else if ($funcaoHabilitada == 1) {
						Painel::alert('erro','Erro ao habilitar função!');
						$funcoes = Painel::selectFunctions();
					}
					
				}
			}
		?>

        <?php foreach($funcoes as $funcao): ?>
        <div class="form-group">
			<label><?= ucfirst($funcao['descricao']).':' ?></label>
			<select name="habilitar_funcoes">
                <option value="1" <?= ($funcao['habilitada'] == 1) ? 'selected' : '' ?>>Habilitado</option>
                <option value="0" <?= ($funcao['habilitada'] == 0) ? 'selected' : '' ?>>Desabilitado</option>
				
			</select>
			<input type="hidden" name="funcao_id" value="<?= $funcao['id'] ?>" />
		</div>
		<!-- form-group -->
        <?php endforeach; ?>

		<div class="form-group">
			<input type="submit" name="acao" value="Salvar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->
