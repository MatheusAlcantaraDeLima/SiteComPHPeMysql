<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<?php
			include_once "toposite.php";

			$cpf_clie = $_POST["cpf_clie"];
			$nome_clie = $_POST["nome_clie"];
			$email_clie = $_POST["email_clie"];
			$endereco_clie = $_POST["endereco_clie"];
			
			include_once "conexao.php";

			$sql = "insert into cliente values('".$cpf_clie."','".$nome_clie."','".$email_clie."','".$endereco_clie."')";

			if (mysqli_query($con, $sql)) {
					$msg = "Registrado com Sucesso";

				}else{
					$msg = "Erro ao Registrar-se";
				}
		?>
			<h1><?php echo "Olá, senhor(a) $nome_clie, enviaremos um e-mail para $email_clie"; ?></h1>
			<h1><?php echo "Status: $msg"; ?></h1>
			<!--<h1><?php echo "$cpf_clie, $nome_clie, $email_clie, $endereco_clie, *TESTE PARA VERIFICAR*"; ?></h1>-->

		<?php
			include_once "rodapesite.php";

			/*AS VARIÁVEIS RECEBEM OS VALORES, MAS NÃO ESTÁ SALVANDO NA TABLE DO BD, TALVEZ SEZA A CONEXÃO*/
		?>
	</div>
</body>
</html>
