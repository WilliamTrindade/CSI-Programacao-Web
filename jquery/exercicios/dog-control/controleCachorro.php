<?php 
	include 'crudCachorro.php';
	$opcao = $_POST["opcao"];
	if($opcao == "Cadastrar"){
		$nome = $_POST["nome"];
		$cc = $_POST["cc"];
		cadastrarCachorro($nome, $cc);
		header("Location: index.php");
	}
?>