<?php

	//conexão com o banco Maria DB
	$conexao = mysqli_connect('localhost', 'root', '');

	//coneta na base de dados
	mysqli_select_db($conexao, 'mercado');

	//define utf8
	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	//insere 1
	mysqli_query(
		$conexao, 
		"INSERT INTO estoque (
			produto,
			quantidade 
		)
		VALUES(
			'Macarrao',
			100
		)"
	);

	//insere 2
	mysqli_query(
		$conexao, 
		"INSERT INTO estoque (
			produto,
			quantidade 
		)
		VALUES(
			'Molho',
			85
		)"
	);

	//insere 3
	mysqli_query(
		$conexao, 
		"INSERT INTO estoque (
			produto,
			quantidade 
		)
		VALUES(
			'Ervilha',
			174
		)"
	);

	//insere 4
	mysqli_query(
		$conexao, 
		"INSERT INTO estoque (
			produto,
			quantidade 
		)
		VALUES(
			'Milho',
			5
		)"
	);
	//insere 5
	mysqli_query(
		$conexao, 
		"INSERT INTO estoque (
			produto,
			quantidade 
		)
		VALUES(
			'Bolacha',
			99
		)"
	);
	
	//fechar conexao
	mysqli_close($conexao);

?>