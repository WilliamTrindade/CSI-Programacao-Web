SELECT codigoProduto, descricao FROM produto, venda WHERE venda.codigoCli = 1 AND venda.codigoProd = produto.codigoProduto;

SELECT codigoProduto, descricao FROM produto WHERE codigoProduto NOT IN ( 
  SELECT codigoProduto FROM produto, venda WHERE venda.codigoCli = 1 AND venda.codigoProd = produto.codigoProduto 
);
