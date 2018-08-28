<?php 

	$fruta = array(
		'Uva',
		'Laranja',
		'Manga',
		'Morango'
	);

	//no foreach
	echo $fruta[1].'<br>';
	print_r($fruta);

	echo "<br> <br>com foreach<br><br>";

	//with foreach
	foreach ($fruta as $valor) {
		echo $valor.'<br>';
	}
?>