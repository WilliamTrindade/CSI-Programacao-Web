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
          <b>Professores</b>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item bg-secondary">
              <a class="nav-link active" href="cadastrarProfessor.php"> Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="visualizarProfessor.php"> Visualizar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="p-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="">Cadastar</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="p-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="POST" action="controleProfessor.php">
              <div class="form-group">
                <label for="nome">Nome do Professor(a)</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do(a) Professor(a)"> </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control celular" placeholder="(99)99999-9999" id="celular" name="celular" class="celular"> </div>
              <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control cep" placeholder="99999-999" id="cep" name="cep"> </div>
              <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12"> </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>
    <script>
      //jquery mask
      jQuery(function($){
        $(".celular").mask("(99)99999-9999");
        $(".cep").mask("99999-999");
      });

    </script>
  </body>

</html>