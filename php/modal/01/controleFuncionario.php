<?php 
	include 'crudFuncionario.php';
	include 'modal.php';

	$opcao = $_POST["opcao"];
	session_start();

	if($opcao == "Cadastrar")
	{
		$nome = $_POST["nome"];
		$cargo = $_POST["cargo"];
		cadastrarFuncionario($nome, $cargo);
		//header("Location: index.php");
		$_SESSION['mensagem'] = 'Funcionário(a) Cadastrado(a) com sucesso!';
		$_SESSION['local'] = 'cadastrarFuncionario.php';
		modalConfirmacao();
	}elseif($opcao == "Alterar")
	{
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$cargo = $_POST["cargo"];
		alterarFuncionario($codigo, $nome, $cargo);
		//header("Location: visualizarFuncionario.php");
		$_SESSION['mensagem'] = 'Funcionário(a) Alterado(a) com sucesso!';
		$_SESSION['local'] = 'visualizarFuncionario.php';
		modalConfirmacao();
	}elseif($opcao == "Excluir")
	{
		$codigo = $_POST["codigo"];
		modalDesejaExcluir($codigo);
	}elseif ($opcao == "EcluirSim")
	{
		$codigo = $_POST["codigo"];
		excluirFuncionario($codigo);
		$_SESSION['mensagem'] = 'Funcionário(a) Alterado(a) com sucesso!';
		$_SESSION['local'] = 'visualizarFuncionario.php';
		modalConfirmacao();
	}
?>