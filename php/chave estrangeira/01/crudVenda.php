<?php 

	include 'conexaoBD.php';

	function mostrarProdutosSelecionados ($codigoCliente) {
		conectar();
		$resultado = query(" 
				SELECT codigoProduto, descricao FROM produto, venda WHERE venda.codigoCli = $codigoCliente AND venda.codigoProd = produto.codigoProduto
		");
		fechar();
		return $resultado;
	}

	function excluirVenda($codigoCliente, $codigoProduto) {
		conectar();
		query(" DELETE FROM venda WHERE codigoCli =  $codigoCliente AND codigoProd = $codigoProduto");
		fechar();
	}

	function mostrarProdutos ($codigoCliente, $codigoProduto) {
		conectar();
		$resultado = query("
			SELECT codigoProduto, descricao FROM produto WHERE $codigoCliente 
			NOT IN
			( 
			  SELECT codigoProduto FROM produto, venda WHERE venda.codigoCli = 1 AND venda.codigoProd = produto.codigoProduto 
			)
		");
		fechar();
		return $resultado;
	}

	function inserirVenda ($codigoCliente, $codigoProduto) {
		conectar();
		query(" INSERT INTO venda (codigoCliente, codigoProd) VALUES ($codigoCliente, $codigoProduto) ");
		fechar();
	}
 ?>