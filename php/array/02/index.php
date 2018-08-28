<?php
	//guarda por chave nome, rua, bairro, cidade
	$pessoa['nome']='Maria da Silva';
	$pessoa["rua"]="7 de Setembro";
	$pessoas["bairro"]='Camobi';
	$pessoa["cidade"]="Santa Maria";

	//mostra o nome da pessoa
	echo $pessoa['nome'];

	//moostra tudo
	print_r ($pessoa);
?>