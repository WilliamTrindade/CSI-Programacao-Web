<?php
	include 'calcularMassa.php';

	echo calcularMassaCorporal(70, 1.77), '<br>';
	echo calcularMassaCorporal(60, 1.78), '<br>';
	echo calcularMassaCorporal(90, 1.45), '<br>';
	echo calcularMassaCorporal(60, 1.89), '<br>';

	echo '<br>', 'Total de pessoas: ', $totalConsulta;
?>