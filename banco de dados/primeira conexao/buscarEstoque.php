<?php

	//conexão com o banco Maria DB
	$conexao = mysqli_connect('localhost', 'root', '');

	//coneta na base de dados
	mysqli_select_db($conexao, 'mercado');

	//define utf8
	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	//select
	$resultado = mysqli_query($conexao, "SELECT * FROM estoque" );
	if($resultado){
		while ($resultadoSeparado = mysqli_fetch_assoc($resultado) ) {
			echo'<br>Códiigo: ', $resultadoSeparado['codigo'],
				'<br>Produto: ',  $resultadoSeparado['produto'],
				'<br>Quantidade: ',  $resultadoSeparado['quantidade'];
		}
	}
	//fechar conexao
	mysqli_close($conexao);

?>