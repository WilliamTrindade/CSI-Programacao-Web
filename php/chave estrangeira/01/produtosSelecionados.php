<!doctype html>
<html lang="pt-br">

 	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>iShop.com</title>
 	</head>

  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container ">
				<a class="navbar-brand" href="">iShop</a>
			  <!-- botao -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" href="index.php">Produtos</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="produtosSelecionados.php">Produtos Selecionado <span class="sr-only">(Página Atual)</span> </a>
			      </li>
			    </ul>
			  </div>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 style="font-size: 150%; margin-top: 2%;margin-bottom: 2%">Produtos Selecionados</h1>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Descrição</th>
					      <th scope="col">Opção</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 

					  		include 'crudVenda.php';

					  		$resultado = mostrarProdutosSelecionados(1);

					  		if($resultado) {

					  			while ($linha = mysqli_fetch_assoc($resultado)){

					  				$codigoProduto = $linha['codigoProduto'];
					  				$descricao = $linha['descricao'];

					  				echo " 

											<tr>
									      <td>$descricao</td>
									      <td> <a class='btn btn-danger' href='controlaVenda.php?opcao=tirarSelecao&codigo=$codigoProduto'>Tirar Seleção</a> </td>
									    </tr>

					  				 ";
					  			}
					  		}
					  	?>
					    
					  </tbody>
					</table>
				</div>
			</div>
		</div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>