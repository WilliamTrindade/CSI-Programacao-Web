<?php 
	include 'conexaoBD.php';

	function cadastrarPessoa($nome, $cidade) {
		conectar();
		query("INSERT INTO pessoa(nome, cidade_id) VALUES ('$nome', '$cidade')");
		fechar();
	}

	function buscarEstados() {
		conectar();
		$resultado = query("SELECT * FROM estados ORDER BY est_nome");
		fechar();
		return $resultado;
	}

/*
	function mostrarVeiculo(){
		conectar();
		$resultado = query("SELECT * FROM veiculo");
		fechar();
		return $resultado;
	}
	function mostrarVeiculoEditar($codigo){
		conectar();
		$resultado = query("SELECT * FROM veiculo WHERE codigo = $codigo");
		fechar();
		return $resultado;
	}
	function editarVeiculo($codigo, $placa, $marca, $modelo, $preco){
		conectar();
		query("UPDATE veiculo SET placa = '$placa', marca = '$marca', modelo = '$modelo', preco = $preco WHERE codigo = $codigo");
		fechar();
	}
	function excluirVeiculo($codigo){
		conectar();
		query("DELETE FROM veiculo WHERE codigo = $codigo");
		fechar();
	}

*/			
?>