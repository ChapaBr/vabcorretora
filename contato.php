<!-- Include Header -->
<?php 
$page = 'contato';
include('layouts/header.php');
?>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mt-5">
				<h1>Contato</h1>
				<form method="POST" action="controller/Envio.php" id="formContato">
					<div id="sendmessage">Obrigado por sua mensagem.</div>
					<div id="errormessage"></div>
					<div class="form-group">
						<label for="input-name" class="forms-label">Nome</label>
						<input type="text" class="form-control" name="nome" id="input-name">
					</div>
					<div class="form-group">
						<label for="input-email" class="forms-label">Email</label>
						<input type="email" class="form-control" name="email" id="input-email">
					</div>
					<div class="form-group">
						<label for="input-tell" class="forms-label">Telefone</label>
						<input type="text" class="form-control" name="telefone" id="input-tell">
					</div>
					<div class="form-group">
						<label for="text-contato" class="forms-label">Mensagem</label>
						<textarea class="form-control" id="text-contato" name="mensagem" rows="5"></textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btnSendEmail">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>