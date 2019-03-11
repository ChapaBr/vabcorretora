<!-- Include Header -->
<?php
$page = 'home';
include('layouts/header.php');
include('model/Conn.php');
include('model/PostModel.php');
?>

<section id="conteudo-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mt-5 mb-5 text-center bloco_imagem">
			<img src="assets/images/vab.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End Home Page -->

<!-- Start Little About -->
<section id="previa_informacoes">
	<div class="container-fluid">
		<div class="row">
			<div class="d-flex flex-row w-100 justify-content-center position-relative card-flex">
				<div class="informacoes text-center">
					<h4>FAÇA SUA COTAÇÃO CONOSCO!</h4>

					<div class="informacoes__bloco w-100">
						<a href="cotacao.php" id="btn-1"></a>
						<a href="contato.php" id="btn-2"></a>
					</div>
				</div>

				<div class="content_img">
					<img src="assets/images/retangulo_torto.svg" alt="">
				</div>

				<div class="informacoes text-center">
					<h4 class="titulo_bloco_carrossel">ÚLTIMAS ATUALIZAÇÕES</h4>

					<div class="informacoes__bloco__carrossel w-100">
						<div id="home-carousel" class="owl-carousel owl-theme border-carousel">
						<?php 
            			$allPosts = new PostModel();
            			$post = $allPosts->listLastPost(); 
                    
            			foreach($post as $item){ ?>
							<div class="item">
								<a href="internaBlog.php?post=<?php echo $item['id_blog'];?>">
									<img src="<?php echo $item['link_image'];?>">
									<p><?php echo $item['title_blog'];?></p>
								</a>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Little About -->

<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>