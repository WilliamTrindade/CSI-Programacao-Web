<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Raiz</title>
	</head>

	<body>
		<div>

			<?php 

				$valor = $_POST["valor"];
				//echo "O valor enviado foi : $valor";
				$raiz = sqrt($valor);

				echo 'A raiz de ', $valor, ' é igual a ', number_format($raiz, 2);
			?>
			
		</div>	
	</body>

</html>