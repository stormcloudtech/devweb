<div class="box-content">
	<h2><i class="fas fa-id-card" aria-hidden="true"></i> Clientes Cadastrados</h2>
	<div class="boxes">
	<?php 

		$clientes = MySql::conectar()->prepare('SELECT * FROM `tb_admin.clientes`');
		$clientes->execute();
		$clientes = $clientes->fetchAll();

	?>
		<div class="box-single-wrapper">
			<?php foreach($clientes as $value): ?>
			<div class="box-single">
				<div class="topo-box">
					<h2><i class="fa fa-user"></i></h2>
				</div>
				<!-- topo-box -->
				<div class="body-box">
					<p><strong><i class="fas fa-pencil-alt"></i> Nome do cliente:</strong> <?= $value['nome']; ?></p>
					<p><strong><i class="fas fa-envelope"></i> E-mail:</strong> <?= $value['email']; ?></p>
					<p><strong><i class="fas fa-id-badge"></i> Tipo:</strong> <?= $value['tipo']; ?></p>
					<p><strong><i class="far fa-credit-card"></i> <?= ($value['tipo'] == 'fisico') ? 'CPF:</strong>' : 'CNPJ:</strong>'; ?><?= $value['cpf_cnpj']; ?></p>
					<div class="group-btn">
						<a class="btn delete" href="<?= INCLUDE_PATH_PAINEL ?>"><i class="fas fa-times"></i> Excluir</a>
						<!-- btn delete -->
						<a class="btn edit" href="<?= INCLUDE_PATH_PAINEL ?>"><i class="fas fa-pencil-alt"></i> Editar</a>
					<!-- btn edit -->
					</div>
					<!-- group-btn -->
				</div>
				<!-- body-box -->
			</div>
			<!-- box-single -->
			<?php endforeach; ?>
		</div>
		<!-- box-single-wrapper -->
		
		<div class="clear"></div>
		<!-- clear -->
	</div>
	<!-- boxes -->
</div><!--box-content-->