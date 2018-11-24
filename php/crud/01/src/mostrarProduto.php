<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Cadastar Produto - Controle de Produtos</title>
	</head>

	<body>
		<div class="container">
			<h1>Mostrar Produtos</h1>
			<?php 
			
				include 'crudProduto.php';

				$resultado = mostrarProduto();

				if($resultado){
					while ($resultadoSeparado = mysqli_fetch_assoc($resultado)) {
						$codigo = $resultadoSeparado['codigo'];
						$descricao = $resultadoSeparado['descricao'];
						$preco = $resultadoSeparado['preco'];
						echo 'Descrição: ', $descricao, '<br>Preço: ', $preco, '<br>';
						echo "<a href='editarProduto.php?codigo=$codigo'>Editar</a><br><br>";
					}
				}
			?>
			<a href="menu.php">Voltar</a>
		</div>
	</body>

</html>