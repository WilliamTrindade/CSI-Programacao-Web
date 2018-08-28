<?php

	//conexão com o banco Maria DB
	$conexao = mysqli_connect('localhost', 'root', '');

	//coneta na base de dados
	mysqli_select_db($conexao, 'mercado');

	//define utf8
	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	//update
	mysqli_query($conexao, "UPDATE funcionario SET nome='Ana' WHERE cargo='Presidente'" );

	//fechar conexao
	mysqli_close($conexao);

?>