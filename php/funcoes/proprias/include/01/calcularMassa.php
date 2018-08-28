<?php 

	function calcularMassaCorporal($peso, $altura){
		//return $peso / ($altura * $altura);
		global $totalConsulta;
		$totalConsulta ++;
		return number_format($peso / ($altura * $altura), 2);

	}
?>