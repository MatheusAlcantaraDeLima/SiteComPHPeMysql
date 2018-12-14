<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página Principal</title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<?php
			include_once "toposite.php";
		?>
		<section id="corpooutraspags">
			<p>
				<h1>A pousada</h1>
				<h2>Fica localizada na Ilha Grande, RJ, e possui mais de 3000 m² de área verde, com vários quartos, todos com vista para o mar.</h2>
			</p>
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234778.2041990463!2d-44.37479967186354!3d-23.155251931316236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c44220fe2d%3A0xcd9a31ccf12016ff!2sIlha+Grande!5e0!3m2!1sen!2sbr!4v1543523963334" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</section>
		<?php
			include_once "rodapesite.php";
		?>
	</div>
</body>
</html>