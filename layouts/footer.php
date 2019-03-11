<!-- Start foot -->
<footer id="foot">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 text-center">
				<h5 class="foot-zip">Onde Estamos</h5>
				<p class="p-back-blue">Rua Antônio Bento 85, Sala 06 - Santa Paula</p>
				<p class="p-back-blue">0952-050 São Caetano do Sul - SP</p>
			</div>
			<div class="col-lg-4 text-center">
				<h5 class="foot-zip">Funcionamento</h5>
				<p class="p-back-blue">Segunda a Sexta das 8h às 18h</p>
			</div>
			<div class="col-lg-4 text-center">
				<h5 class="foot-zip">Contato</h5>
				<p class="p-back-blue">(11) 4763-8050</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<a href=""><i class="fab fa-facebook-square foot-icon"></i></a>
				<a href=""><i class="fab fa-instagram foot-icon"></i></a>
				<a href=""><i class="fab fa-twitter-square foot-icon"></i></a>
				<a href=""><i class="fab fa-pinterest-square foot-icon"></i></a>
			</div>
		</div>
	</div>
</footer>
<footer id="footEB">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="pEB text-center">Todos os Direitos Reservados - Empty Block</p>
			</div>
		</div>
	</div>
</footer>
<!-- End foot -->

<div class="alerta">
	<div class="container">
		<?php if($_GET['mensagem'] == "sucesso_ao_enviar"){ ?>
		<div class="row margin_12_0_0_0">
			<div class="col-lg-12 text-center">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>
						<span id="nome-bold">Sucesso</span>
					</strong> ao simular.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } if($_GET['mensagem'] == "erro_ao_enviar"){?>
		<div class="row margin_12_0_0_0">
			<div class="col-lg-12 text-center">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>
						<span id="nome-bold">Desculpa!</span>
					</strong> ocorreu um erro ao simular.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'bxfsveiwSY';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<!-- Java Script -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
 crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
 crossorigin="anonymous"></script>
<script type="text/javascript" src="libs/owlcarousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="libs/mdbootstrap/js/mdb.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>