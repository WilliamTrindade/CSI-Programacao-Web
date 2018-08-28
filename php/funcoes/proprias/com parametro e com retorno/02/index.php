<?php
	$totalConsulta = 0;
	function calculasMassaCorporal($peso, $altura){
		//return $peso / ($altura * $altura);
		global $totalConsulta;
		$totalConsulta ++;
		return number_format($peso / ($altura * $altura), 2);

	}
	echo calculasMassaCorporal(70, 1.77), '<br>';
	echo calculasMassaCorporal(60, 1.78), '<br>';
	echo calculasMassaCorporal(90, 1.45), '<br>';
	echo calculasMassaCorporal(60, 1.89), '<br>';

	echo '<br>', 'Total de pessoas: ', $totalConsulta;
?>