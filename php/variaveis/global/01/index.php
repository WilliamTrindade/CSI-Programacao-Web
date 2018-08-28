<?php
	$totalConsulta = 0;
	function calculasMassaCorporal($peso, $altura){
		//VARIAVEL ACESSIVEL FORA DO ESCOPO DA FUNCAO COM O global
		global $totalConsulta;
		$totalConsulta = 1;
		return number_format($peso / ($altura * $altura), 2);

	}
	echo calculasMassaCorporal(60, 1.80);
	echo '<br>', 'Total de pessoas: ', $totalConsulta;
?>