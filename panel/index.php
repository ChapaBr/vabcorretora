<?php include('../layouts/headerPanel.php');
error_reporting(0);
ini_set(“display_errors”, 0 );
 ?>
<section id="panel">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block_logo text-center">
				<img src="../assets/images/vab.png" alt="Logo">
			</div>
			<div class="col-lg-6 block_btns">
				<a href="criandoPostagem.php">CRIAR POSTAGEM</a>
				<a href="listBlogs.php">EDITAR/EXCLUIR POSTAGENS</a>
			</div>
		</div>
	</div>
</section>

<div class="alerta">
	<div class="container">
		<?php if($_GET['post'] == "sucesso"){ ?>
		<div class="row margin_12_0_0_0">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>
						<span id="nome-bold">Postagem</span>
					</strong> criado com sucesso.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } if($_GET['post'] == "erro"){?>
		<div class="row margin_12_0_0_0">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>
						<span id="nome-bold">Desculpa!</span>
					</strong> ocorreu um erro ao criar uma postagem.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<?php include('../layouts/footerPanel.php'); ?>