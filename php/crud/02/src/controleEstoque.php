<?php 

	include 'crudEstoque.php';

	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar"){
		$descricao = $_POST["descricao"];
		$quantidade = $_POST["quantidade"];
		cadastrarProduto($descricao, $quantidade);
		header("Location: cadastrarEstoque.php");
	}elseif($opcao == "Editar"){
		$codigo = $_POST["codigo"];
		$descricao = $_POST["descricao"];
		$quantidade = $_POST["quantidade"];
		alterarProduto($codigo, $descricao, $quantidade);
		header("Location: visualizarEstoque.php");
	}elseif($opcao == "Excluir"){
		$codigo = $_POST["codigo"];
		excluirProduto($codigo);
		header("Location: visualizarEstoque.php");
	}
?>