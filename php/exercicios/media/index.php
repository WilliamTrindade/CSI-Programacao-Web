<?php 
	include 'media.php';
	$x = media(1,2,9,10);
	echo 'Resultado: ', $x, '<br>';
	
	if($x >= 7) echo "Aprovado!";
	if($x >= 5 && $x < 7) echo "Exame!";
	if($x < 5 ) echo "Reprovado!";
?>