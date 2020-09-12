<div class="box-content">
	<h2><i class="fas fa-pencil-alt"></i> Adicionar Serviço</h2>

	<form class="form-servicos" method="post" enctype="multipart/form-data" action="<?= INCLUDE_PATH_PAINEL; ?>ajax/form-servicos.php">

		<div class="form-group">
			<label>Ícone do Serviço:</label>
			<input type="text" name="icone_servico" />
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
			<img src="images/ajax-loader.gif" id="loadingImage" style="display:none" />
		</div><!--form-group-->

	</form>
	<!-- form-servicos -->


</div><!--box-content-->