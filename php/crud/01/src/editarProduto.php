<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Cadastar Produto - Controle de Produtos</title>
	</head>

	<body>

		<div class="container">
			<h1>Editar Produtos</h1>
			
			<?php 
			
				include 'crudProduto.php';

				$codigo = $_GET['codigo'];

				$resultado = mostrarProdutoAlterar($codigo);

				if($resultado){
					while($resultadoSeparado = mysqli_fetch_assoc($resultado)) {
						$descricao = $resultadoSeparado['descricao'];
						$preco = $resultadoSeparado['preco'];
					}
				}
			
			?>

			<form method="post" action="controleProduto.php">
				
				<!--descrição-->
				<label for="descricao">Descrição: </label>
				<input type="text" name="descricao" id="descricao" value="<?php echo $descricao; ?>">

				<!--preço-->
				<label for="preco">Preço: </label>
				<input type="number" step=0.01 name="preco" id="preco" value="<?php echo $preco; ?>">
				
				<!--botoes-->
				<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
				<input type="submit" name="opcao" value="Alterar">
				<input type="submit" name="opcao" value="Excluir">
				

			</form>
			<a href="mostrarProduto.php">Voltar</a>
		</div>
	</body>

</html>	