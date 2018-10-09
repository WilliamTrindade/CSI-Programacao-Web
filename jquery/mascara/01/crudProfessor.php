<?php 

	include 'conexaoBD.php';

	function cadastrarProfessor($nome, $celular, $cep){
		conectar();
		query("INSERT INTO professor(nome, celular, cep) VALUES ('$nome', '$celular', '$cep')");
		fechar();
	}

	function mostrarProfessor(){
		conectar();
		$resultado = query("SELECT * FROM professor");
		fechar();
		return $resultado;
	}

?>