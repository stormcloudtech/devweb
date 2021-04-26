<div class="box-content">
	<h2><i class="fas fa-pencil-alt"></i> Cadastrar Categoria</h2>

	<form class="form-categorias" method="post" enctype="multipart/form-data" action="<?= INCLUDE_PATH_PAINEL; ?>ajax/form-categorias.php">

		<div class="form-group">
			<label>Nome da categoria:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar!">
			<img src="images/ajax-loader.gif" id="loadingImage" style="display:none" />
		</div><!--form-group-->

	</form>
	<!-- form-categorias -->


</div><!--box-content-->