<?php 

	include 'conexaoBD.php';

	function cadastrarInformatica($descricao, $marca){
		conectar();
		query("INSERT INTO produto(descricao, marca) VALUES ('$descricao', '$marca')");
		fechar();
	}

	function mostrarInformatica(){
		conectar();
		$resultado = query("SELECT * FROM produto");
		fechar();
		return $resultado;
	}

	function mostrarInformaticaPesquisar($pesquisa){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE descricao LIKE '%$pesquisa' OR marca LIKE '$pesquisa%' ");
		fechar();
		return $resultado;
	}

?>