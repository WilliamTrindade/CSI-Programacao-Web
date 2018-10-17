<?php 
	include 'crudInformatica.php';

	$opcao=$_POST["opcao"];

	if($opcao=="Cadastrar"){
		$descricao=$_POST["descricao"];
		$marca=$_POST["marca"];
		cadastrarInformatica($descricao, $marca);
		header("Location: cadastrarInformatica.php");


	}




?>