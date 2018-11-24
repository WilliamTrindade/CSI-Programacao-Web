<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>

	<body>
		<div class="container">
			<?php 
				session_start();
				if (isset($_SESSION['nome'])) {
					echo 'Seja Bem-Vindo', $_SESSION['nome'];
				}
			?>
			<br> <a href="controleUsuario.php?opcao=Sair">Sair</a>
			
		</div>
	</body>

</html>