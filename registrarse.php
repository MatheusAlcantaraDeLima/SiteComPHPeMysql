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
			<fieldset>
				<legend>Registro de Vaga</legend>
					<form action="msgRegistro.php" method="post">
						CPF:<input type="text" name="cpf_clie" required="" placeholder="Digite o seu CPF" /><br>
						<hr>
						Nome:<input type="text" name="nome_clie" required="" placeholder="Digite o seu Nome" /><br>
						<hr>
						Email:<input type="text" name="email_clie" required="" placeholder="Digite o seu E-mail" /><br>
						<hr>
						Endereço:<input type="text" name="endereco_clie" required="" placeholder="Digite o seu Endereço"/><br><hr>
						<input type="submit" name="enviar"> <input type="reset" name="resetar">
					</form>
			</fieldset>
		</section>
		<?php
																				/*MUDAR BD PARA CLIENTE AO INVES DE RESERVA*/
			include_once "rodapesite.php";
		?>
	</div>
</body>
</html>
