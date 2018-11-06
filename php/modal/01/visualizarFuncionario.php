<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <a class="navbar-brand text-primary" href="visualizarFuncionario.php">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> Funcionario.com</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link disabled" href="cadastrarFuncionario.php">Cadastrar</a> </li>
          <li class="nav-item bg-light"> <a class="nav-link active" href="visualizarFuncionario.php">Visualizar</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Visualizar<br></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Cargo</th>
                  <th>Opção</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include 'crudFuncionario.php';
                  $resultado = mostrarFuncionario();
                      if($resultado){
                        while($linha = mysqli_fetch_assoc($resultado)) {
                          $codigo = $linha['codigo'];
                          $nome = $linha['nome'];
                          $cargo = $linha['cargo']; 
                      echo "
                      <tr>
                        <td>$nome</td>
                        <td>$cargo</td>
                        <td>
                          <a class='btn btn-primary' href='editarFuncionario.php?codigo=$codigo'>Editar</a>
                        </td>
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
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>