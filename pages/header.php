<!DOCTYPE html>
<html>

<head>
	<title>Sistema Loja Veículos</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="<?= $base_url ?>css/style.css" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>

<body>
<header>

<div class="container">
	<div class="logo">
		<?php 

			require 'classes/Site.php';

			$site = new Site();

			$site_logo = $site->getLogo();

		?>
		<a href="index.html"><img src="<?= $base_url . 'imagens/' . $site_logo ?>" /></a>
	</div>
	<!--logo-->

	<nav class="desktop">
		<ul>
			<li><a style="color:#EB2D2D;" href="./">Home</a></li>
			<li><a href="veiculos.php">Venda</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a goto="contato" href="index.php#contato">Contato</a></li>
		</ul>
	</nav>
	<!--desktop-->

	<nav class="mobile">
		<ul>
			<li><a style="color:#EB2D2D;" href="./">Home</a></li>
			<li><a href="veiculos.php">Venda</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a goto="contato" href="index.php#contato">Contato</a></li>
		</ul>
	</nav>
	<!--mobile-->

	<div class="clear"></div>
</div>
<!--container-->
</header>