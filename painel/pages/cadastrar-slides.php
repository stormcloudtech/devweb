<div class="box-content">
	<h2><i class="fas fa-pencil-edit"></i> Cadastrar Slide</h2>

	<form class="form-slides" method="post" enctype="multipart/form-data" action="<?= INCLUDE_PATH_PAINEL; ?>ajax/form-slides.php">

		<div class="form-group">
			<label>Nome do slide:</label>
			<input type="text" name="nome">
		</div><!--form-group-->


		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="imagem"/>
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar!">
			<img src="images/ajax-loader.gif" id="loadingImage" style="display:none" />
		</div><!--form-group-->

	</form>
	<!-- form-slides -->


</div><!--box-content-->