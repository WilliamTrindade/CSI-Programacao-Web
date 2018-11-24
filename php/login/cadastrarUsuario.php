<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>

	<body>
		<div class="container">
			<h1>Cadastrar Usuário</h1>

			<form method="post" action="controleUsuario.php">
				
				<label for="nome">Usuário: </label>
				<input type="text" name="nome" id="nome">

				<label for="senha">Senha: </label>
				<input type="password" name="senha" id="senha">

				<input type="submit" value="Cadastrar Usuário" name="opcao">
			</form>
			<a href="paginaInicial.php">Voltar</a>
		</div>

	</body>

</html>