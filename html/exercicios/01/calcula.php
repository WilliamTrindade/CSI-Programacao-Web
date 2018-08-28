<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Calculadora</title>
	</head>

	<body>
		<?php 

			$valor1 = $_POST["valor1"];
			$valor2 = $_POST["valor2"];
			$op = $_POST["operacao"];
			$res = 0;

			if($op == "+") {
				$res = $valor1 + $valor2;
			}else if ($op == "-") {
				$res = $valor1 - $valor2;
			}else if($op == "*"){
				$res = $valor1 * $valor2;
			}else{
				$res = $valor1 / $valor2;
			}
			echo "O resultado  é : $res ";

		?>
		
	</body>
</html>