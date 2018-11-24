<?php 
	
	include 'crudProduto.php';

	$opcao = $_POST["opcao"];

	if ($opcao == "Cadastrar") {
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		cadastarProduto($descricao, $preco);
		header("Location: cadastrarProduto.php");
	}elseif($opcao == "Alterar"){
		$codigo = $_POST["codigo"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		echo $preco;
		alterarProduto($codigo, $descricao, $preco);
		header("Location: mostrarProduto.php");
	}elseif($opcao == "Excluir"){
		$codigo = $_POST["codigo"];
		excluirProduto($codigo);
		header("Location: mostrarProduto.php");
	}

?>