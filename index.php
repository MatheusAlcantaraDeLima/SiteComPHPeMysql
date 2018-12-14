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
		<section id="corpo">
			<caption><h1>Veja mais sobre Parnaioca</h1></caption>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/IoXXH-VceVE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<p>
				<h2>Passeios e programações</h2>
				<caption>
					<h3>
						<p>Passeio de escuna</p>
					</h3>
				</caption>
				<figcaption>
					<figure><img id="escuna" src="imagens/escuna.jpg" class="img-fluid" alt="Responsive image"></figure>
					<p><h4>Acontece na Segunda, Quarta, Sexta, Sábado, Domingo e Feriados. As 10hrs, 14hrs e 16hrs.</h4></p>
				</figcaption>
			</p>
		</section>
		<section id="corpo2">
			<h3>Passeio de barco</h3>
			<figcaption>
				<figure><img id="barco" src="imagens/barco.jpg" class="img-fluid" alt="Responsive image"></figure>
				<p><h4>Acontece todos os dias, das 13hrs as 17hrs, com direito  a lanches e bebidas.</h4></p>
				<h3>Trilhas</h3>
				<figure><img id="trilha" src="imagens/trilha.JPG" class="img-fluid" alt="Responsive image"></figure>
			</figcaption>
		</section>
		<?php
			include_once "rodapesite.php";
		?>
	</div>
</body>
</html>