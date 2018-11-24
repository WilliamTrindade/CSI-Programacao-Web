<?php 
	include 'crudPessoas.php';
	$opcao = $_POST["opcao"];
	if($opcao == "Cadastrar"){
		$nome = $_POST["nome"];
		$cidade = $_POST["cidade"];
		cadastrarPessoa($nome, $cidade);
		header("Location: cadastrarPessoa.php");
	}elseif($opcao == "Editar"){
		$codigo = $_POST["codigo"];
		$placa = $_POST["placa"];
		$marca = $_POST["marca"];
		$modelo = $_POST["modelo"];
		$preco = $_POST["preco"];
		editarVeiculo($codigo, $placa, $marca, $modelo, $preco);
		header("Location: ../view/visualizarVeiculo.php");
	}elseif($opcao == "Excluir"){
		$codigo = $_POST["codigo"];
		excluirVeiculo($codigo);
		header("Location: ../view/visualizarVeiculo.php");
	}
?>