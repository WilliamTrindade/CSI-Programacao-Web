<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="cadastrarPessoa.php">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> Atualizar Campos</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item bg-success"> <a class="nav-link" href="cadastrarPessoa.php">Cadastrar</a> </li>
          <li class="nav-item"> <a class="nav-link" href="visualizarPessoa.php">Visualizar</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Cadastrar</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="POST" action="controlePessoas.php">
            <div class="form-group"> <label for="nome">Nome</label> <input type="text" class="form-control" placeholder="Digite o nome" id="nome" name="nome"> </div>
            <div class="form-group"><label for="estdado">Estado</label>
              <select class="custom-select" id="estado" name="estado">
                <?php
                
                  include 'crudPessoas.php';

                  echo " <option value='0'>Escolha em estado</option> ";

                  $resultado = buscarEstados();

                  if($resultado) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                      // se ecistir alguma coisa

                      echo "<option value='".$linha['id']."'>".$linha['est_nome']."</option> ";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group" id="cidade">
              <label for="cidade">Cidade</label>
              <select class="custom-select" id="cidade" name="cidade">

                <option value="0">Escolha um Estado</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" name="Opcao" value="Cadastrar">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>

</html>