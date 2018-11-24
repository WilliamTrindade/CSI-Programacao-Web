<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="theme.css" type="text/css"> 
    </head>

    <body>
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="paginaInicial.php">
                    <i class="fa d-inline fa-lg fa-pie-chart"></i>
                    <b>Estoque</b>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="paginaInicial.php">Página Inicial
                            <br> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cadastrarEstoque.php">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="visualizarEstoque.php">Visualizar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="p-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="">Editar</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            include 'crudEstoque.php';
                            $codigo = $_GET['codigo'];
                            $resultado = mostrarProdutoEditar($codigo);
                            if($resultado){
                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                    $descricao = $linha['descricao'];
                                    $quantidade = $linha['quantidade'];
                                }
                            }
                        ?>
                        <form class="" method="post" action="controleEstoque.php">
                            <div class="form-group">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite o nome do produto" value="<?php echo $descricao; ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="number" class="form-control" placeholder="Digite a quantidade" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>"> 
                            </div>
                            <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">
                            <button type="submit" class="btn btn-primary" name="opcao" value="Editar">Editar</button>
                            <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
                            <a class="btn btn-light" href="visualizarEstoque.php">Cancelar<br> </a>
                        </form>
                    </div>
                </div>
            </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>