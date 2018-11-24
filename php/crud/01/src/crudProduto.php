<?php 

	include 'conexaoBD.php';

	function cadastarProduto($descricao, $preco){
		conectar();
		query("INSERT INTO produto (descricao, preco) VALUES ('$descricao', '$preco')");
		fechar();
	}

	function mostrarProduto(){
		conectar();
		$resultado = query("SELECT * FROM PRODUTO");
		fechar();

		return $resultado; 
	}

	function mostrarProdutoAlterar($codigo){
		conectar();
		$resultado = query("SELECT * FROM PRODUTO WHERE CODIGO = $codigo");
		fechar();

		return $resultado; 
	}

	function alterarProduto($codigo, $descricao, $preco){
		conectar();
		query("UPDATE produto SET descricao='$descricao', preco=$preco WHERE codigo = $codigo");
		fechar();
	}

	function excluirProduto($codigo){
		conectar();
		query("DELETE FROM produto WHERE codigo=$codigo");
		fechar();
	}
?>