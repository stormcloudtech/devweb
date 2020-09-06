<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Adicionar Depoimentos</h2>

	<form class="form-depoimentos" method="post" enctype="multipart/form-data" action="<?= INCLUDE_PATH_PAINEL; ?>ajax/form-depoimentos.php">

		<?php
			
		?>

		<div class="form-group">
			<label>Nome da pessoa:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label>Depoimento:</label>
			<textarea name="depoimento"></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Data:</label>
			<input formato="data" type="text" name="data">
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_site.depoimentos" />
			<input type="submit" name="acao" value="Cadastrar!">
			<img src="images/ajax-loader.gif" id="loadingImage" style="display:none" />
		</div><!--form-group-->

	</form>
	<!-- form-depoimentos -->


</div><!--box-content-->