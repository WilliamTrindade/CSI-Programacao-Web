<?php

	//conexão com o banco Maria DB
	$conexao = mysqli_connect('localhost', 'root', '');

	//coneta na base de dados
	mysqli_select_db($conexao, 'mercado');

	//define utf8
	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	//delete
	mysqli_query($conexao, "DELETE FROM funcionario WHERE nome = 'Pedro' ");

	//fechar conexao
	mysqli_close($conexao);

?>