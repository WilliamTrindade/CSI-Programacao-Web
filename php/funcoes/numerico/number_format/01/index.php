<?php
	function calculasMassaCorporal($peso, $altura){
		//return $peso / ($altura * $altura);

		return number_format($peso / ($altura * $altura), 2);

	}
	echo calculasMassaCorporal(60, 1.80);
?>