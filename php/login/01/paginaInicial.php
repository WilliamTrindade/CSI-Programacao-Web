<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>

	<body>
		<div class="container">
			<h1>Acessar</h1>	
			<form action="controleUsuario.php" method="post">
				<label for="nome">Usuário: </label>
				<input type="text" name="nome" id="nome">

				<label for="senha" >Senha: </label>
				<input type="password" name="senha" id="senha">

				<input type="submit" name="opcao" value="Entrar">
			</form>
			<a href="cadastrarUsuario.php">Cadastrar Usuário</a>
		</div>
		
	</body>
</html>