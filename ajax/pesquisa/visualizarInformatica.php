<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="cadastrarInformatica.php">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>Informatica.com</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="cadastrarInformatica.php"> Cadastrar</a>
          </li>
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="visualizarInformatica.php"> Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="">
            <h1 class="">
              <b>Visualizar e Pesquisar</b>
            </h1>
            <div class="form-group">
              <label for="pesquisa">Pesquisar:</label>
              <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Digite a descrição ou marca para pesquisar"> </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th>Descrição</th>
                <th>Marca</th>
              </tr>
            </thead>
            <tbody class="table-results">
              <?php 
                include 'crudInformatica.php';

                $resultado=mostrarInformatica();
                if($resultado){
                  while ($linha=mysqli_fetch_assoc($resultado)) {
                    $descricao=$linha['descricao'];
                    $marca=$linha['marca'];
                    echo "
                      <tr>
                        <td>$descricao</td>
                        <td>$marca</td>
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
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="javascriptPesquisar.js"></script>
  
</body>

</html>