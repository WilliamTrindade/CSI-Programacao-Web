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
      <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b>&nbsp;Informática.com</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-secondary">
            <a class="nav-link active" href="cadastrarInformatica.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="visualizarInformatica.php">Visualizar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">
            <b>Cadastrar</b>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="../controller/controleInformatica.php">
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" placeholder="Digite a Descrição do Produto" id="descricao" name="descricao"> </div>
            <div class="form-group">
              <label for="opcao">Opção</label>
              <input type="text" class="form-control" placeholder="Digite a Marca do Produto" id="marca" name="marca"> </div>
            <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastrar</button>
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