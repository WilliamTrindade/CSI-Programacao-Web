<?php
	$fruta = array('Uva', 'Laranja', 'Manga', 'Morango');

	//count- conta os elemento do array ou objeto
	$qtde = count($fruta);
	
	echo $qtde, '<br>';

	for($i=0;$i<$qtde;$i++){
		echo $fruta[$i],'<br>';
	}
?>