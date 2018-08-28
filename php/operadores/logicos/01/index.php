<?php
	$valor1 = 10;
	$valor2 = 20;

	$valor3 = $valor1 + $valor2;

	if ($valor1 == 10 and $valor3 == 20){
		echo 'Entrou o and';
	}elseif ($valor1 == 10 or $valor3 == 20){
		echo 'Entrou no or';
	}
?>