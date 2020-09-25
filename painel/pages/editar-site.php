<?php 
	$site = Painel::select('tb_site.config',false);
?>

<div class="box-content">
	<h2><i class="fas fa-pencil-alt"></i> Editar Configurações do Site</h2>

	<form method="post" enctype="multipart/form-data">

	<?php
			if(isset($_POST['acao'])){
				//Enviei o meu formulário.
				
				$id = $site['id'];
				$titulo = addslashes($_POST['titulo']);
				$nome_autor = addslashes($_POST['nome_autor']);
				$descricao = addslashes($_POST['descricao']);
				$banner_background = $_FILES['banner_background'];
				$bg_atual = $_POST['bg_atual'];
				$titulo_banner = addslashes($_POST['titulo_banner']);
				$texto_banner = addslashes($_POST['texto_banner']);
				$texto_botao = addslashes($_POST['texto_botao']);
				$nome_tabela = $_POST['nome_tabela'];
				$cor_titulo = $_POST['cor_titulo'];
				$endereco_empresa_1 = addslashes($_POST['endereco_empresa_1']);
				$endereco_empresa_2 = addslashes($_POST['endereco_empresa_2']);
				$logo_empresa = $_FILES['logo_empresa'];
				$logo_atual = $_POST['logo_atual'];
				$logo_enviar = '';
				$bg_enviar = '';
				$erro = false;

				if($banner_background['name'] != ''){

					//Existe o upload de imagem.
					if(Painel::imagemValida($banner_background)){
						Painel::deleteFile($bg_atual);

						$bg_enviar = Painel::uploadFile($banner_background);
					}else{
						$erro = true;
						Painel::alert('erro','O formato da imagem de fundo não é válido!');
					}
				} else {
					$erro = false;
					$bg_enviar = $bg_atual;
				}

				if($logo_empresa['name'] != ''){

					//Existe o upload de imagem.
					if(Painel::imagemValida($logo_empresa)){
						Painel::deleteFile($logo_atual);

						$logo_enviar = Painel::uploadFile($logo_empresa);
					}else{
						$erro = true;
						Painel::alert('erro','O formato da imagem do logo não é válido!');
						$site = Painel::select('tb_site.config','id = ?',array($id));
					}
				} else {
					$erro = false;
					$logo_enviar = $logo_atual;
				}

				if (!$erro) {
					$arr = [
						'titulo' => $titulo, 
						'nome_autor' => $nome_autor, 
						'descricao' => $descricao,
						'titulo_banner' => $titulo_banner,
						'texto_banner' => $texto_banner, 
						'texto_botao' => $texto_botao, 
						'banner_background' => $bg_enviar, 
						'cor_titulo' => $cor_titulo, 
						'endereco_empresa_1' => $endereco_empresa_1,
						'endereco_empresa_2' => $endereco_empresa_2,
						'logo_empresa' => $logo_enviar,
						'nome_tabela' => $nome_tabela,
						'id' => $id
					];
					Painel::update($arr);
					$site = Painel::select('tb_site.config','id = ?',array($id));
					Painel::alert('sucesso','O site foi editado com sucesso!');
				}

				

			}

			
		?>

		<div class="form-group">
			<label>Título do site:</label>
			<input type="text" name="titulo" value="<?= $site['titulo']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Nome do autor do site:</label>
			<input type="text" name="nome_autor" value="<?= $site['nome_autor']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do autor do site:</label>
			<textarea name="descricao"><?php echo $site['descricao']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Logo da Empresa:</label>
			<input type="file" name="logo_empresa"/>
			<input type="hidden" name="logo_atual" value="<?= $site['logo_empresa']; ?>">
		</div>
		<!--form-group-->

		<div class="form-group">
			<label>Imagem de Fundo do Banner:</label>
			<input type="file" name="banner_background"/>
			<input type="hidden" name="bg_atual" value="<?php echo $site['banner_background']; ?>">
		</div>
		<!--form-group-->

		<div class="form-group">
			<label>Título do Banner:</label>
			<input type="text" name="titulo_banner" value="<?= $site['titulo_banner']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Cor do Título do Banner:</label>
			<input type="color" name="cor_titulo" value="<?= $site['cor_titulo']; ?>" />
		</div><!--form-group-->

			
		<div class="form-group">
			<label>Texto do Banner:</label>
			<textarea name="texto_banner"><?php echo $site['texto_banner']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Texto do Botão:</label>
			<input type="text" name="texto_botao" value="<?= $site['texto_botao']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Endereço da Empresa - Linha 1:</label>
			<input type="text" name="endereco_empresa_1" value="<?= $site['endereco_empresa_1']; ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Endereço da Empresa - Linha 2:</label>
			<input type="text" name="endereco_empresa_2" value="<?= $site['endereco_empresa_2']; ?>" />
		</div><!--form-group-->

		
		<div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_site.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->