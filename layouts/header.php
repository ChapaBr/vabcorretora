<?php error_reporting(0); ini_set(“display_errors”, 0 ); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fi=no">
	<meta name="author" content="VAB Corretora" />
	<meta name="description" content="Corretora de seguros" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="corretora" />
	<meta property="og:title" content="Corretora de Seguros" />
	<meta property="og:description" content="Corretora de Seguros" />
	<meta property="og:url" content="https://www.vbcorretora.com.br" />
	<meta property="og:site_name" content="VAB Corretora" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="A melhor corretora de seguros atuante no mercado" />
	<meta name="twitter:tittle" content="VAB Corretora" />
	<link rel="icon" href="#" type="image/jpeg">
	<title>VAB - CORRETORA</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="libs/owlcarousel/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="libs/owlcarousel/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="libs/mdbootstrap/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

	<!-- Start Nav -->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg">
			<a class="navbar-brand" href="index.php"><img class="img-logo" src="assets/images/logo.png" alt="Logo da Empty Block"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav scrolling">
					<li class="nav-item">
						<?php if($page == 'home'){ ?>
						<a class="nav-link active_menu" href="index.php">Home <span class="sr-only">(current)</span></a>
						<?php } else{?>

						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						<?php }?>
					</li>
					<li class="nav-item">
						<?php if($page == 'sobre'){ ?>
						<a class="nav-link active_menu" href="sobre.php">A Empresa</a>
						<?php } else{?>
						<a class="nav-link" href="sobre.php">A Empresa</a>
						<?php }?>
					</li>
					<li class="nav-item">
						<?php if($page == 'cotacao'){ ?>
						<a class="nav-link active_menu" href="cotacao.php">Cotação</a>
						<?php } else{?>
						<a class="nav-link" href="cotacao.php">Cotação</a>
						<?php }?>
					</li>
					<li class="nav-item">
						<?php if($page == 'blog'){ ?>
						<a class="nav-link active_menu" href="blog.php">Atualizações</a>
						<?php } else{?>
						<a class="nav-link" href="blog.php">Atualizações</a>
						<?php }?>
					</li>
					<li class="nav-item">
						<?php if($page == 'contato'){ ?>
						<a class="nav-link active_menu" href="contato.php">Contato</a>
						<?php } else{?>
						<a class="nav-link" href="contato.php">Contato</a>
						<?php }?>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- End Nav -->

	<!-- Start Active Menu -->
	<?php ?>
	<!-- End Active Menu -->