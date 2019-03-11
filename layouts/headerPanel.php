<?php 
include "../model/Conn.php";
include "../model/User_model.php";
session_start();
if (!isset($_SESSION["user_login"]) || $_SESSION["user_login"] != TRUE) { 
	header("Location: ../login.php?erro=LoginPerdido"); 
}
?>
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
</head>

<body>
	<?php  $user_header = new User_model; $usuario = $user_header->listUser($_SESSION["user_login"]);  ?>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg">
			<?php foreach($usuario as $data){ ?>
			<div class="navbar-brand">
				<p class="title_navIn">
					LOGADO COMO:
					<span>
						<?php echo $data['nome']; } ?></span>
				</p>
			</div>
			<form action="../controller/Logout.php" method="POST" id="form_logout">
				<button type="submit">Sair <i class="fa fa-sign-out-alt"></i></button>
			</form>
		</nav>
	</header>