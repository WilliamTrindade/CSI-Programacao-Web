<?php 
	include 'conexaoBD.php';
	function cadastrarCachorro($nome, $cc){
		conectar();
		query("INSERT INTO cachorro(nome, cc) VALUES ('$nome', '$cc')");
		fechar();
	}
?>