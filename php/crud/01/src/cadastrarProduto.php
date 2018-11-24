<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Cadastar Produto - Controle de Produtos</title>
	</head>

	<body>
		<div class="container">
			<h1>Cadastrar Produtos</h1>
			<form method="post" action="controleProduto.php">
				
				<!--descrição-->
				<label for="descricao">Descrição: </label>
				<input type="text" name="descricao" id="descricao">
				<!--preço-->
				<label for="preco">Preço: </label>
				<input type="number" step=0.01 name="preco" id="preco">
				<!--botao cadastrar-->
				<input type="submit" name="opcao" value="Cadastrar">

			</form>
			<a href="menu.php">Voltar</a>
		</div>
	</body>

</html>