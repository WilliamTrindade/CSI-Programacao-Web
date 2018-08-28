<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Pode Votar? </title>
	</head>

	<body>
		<div>
			<?php
				$dataNasc = $_POST["dataNasc"];
				//echo $dataNasc;
				sscanf($dataNasc, '%d-%d-%d', $ano, $mes, $dia);
				$dataAtual = getdate();
				$idade = $dataAtual['year'] - $ano;

				if ($dataAtual['mon'] < $mes || ($dataAtual['mon'] == $mes && $dataAtual['mday'] < $dia) ) {
					$idade--;
				}

				if ($idade >= 18) {
					$v ="Já pode votar";
					$d = "Já pode dirigir";
				}
				else if($idade >= 16){
					$v ="Já pode votar";
					$d = "Não pode dirigir";
				}
				else{
					$v ="Não pode votar";
					$d = "Não pode dirigir";
				}

				echo 'Sua Idade é ', $idade, '<br>';
				echo 'Com essa idade você ', $v, ' e ', $d;
			?>
			<br><a href="index.html">Voltar</a>
		</div>
	</body>

</html>