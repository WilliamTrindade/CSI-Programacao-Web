<?php 
	include 'conexaoBD.php';

	function cadastrarInformatica($descricao, $marca){
		conectar();
		query("INSERT INTO PRODUTO (DESCRICAO, MARCA) VALUES('$descricao', '$marca')");
		fechar();
	}

	function mostrarInformatica(){
		conectar();
		$resultado=query("SELECT * FROM PRODUTO");
		fechar();		
		return $resultado;
	}

	function mostrarInformaticaPesquisar($pesquisa){
		conectar();
		$resultado=query("SELECT * FROM PRODUTO WHERE DESCRICAO LIKE '%$pesquisa%' OR MARCA LIKE '%$pesquisa%'");
		fechar();
		return $resultado;
	}





?>