<?php 

	include 'crudUsuario.php';

	if (isset($_POST["opcao"])) {

		$opcao = $_POST["opcao"];

		if($opcao == 'Cadastrar Usuário') {

			$nome = $_POST["nome"];
			#no banco define-se uma a senha com 40 caracteres para caber os 40 caracteres da criptografia
			#criptografia sha1!
			$senha = sha1($_POST["senha"]);
			cadastrarUsuario($nome, $senha);
			header("Location: cadastrarUsuario.php");

		}else if($opcao == 'Entrar') {
			
			$nome = $_POST['nome'];
			$senha = sha1($_POST['senha']);

			$nomeBanco = "null";
			$senhaBanco = "null";

			$resultado = buscarUsuario($nome);
			
			while($linha = mysqli_fetch_assoc($resultado)) {
				$nomeBanco = $linha['nome'];
				$senhaBanco = $linha['senha'];
			}
			if($nome == $nomeBanco){
				if($senha == $senhaBanco){
					session_start();
					$_SESSION['nome'] = $nomeBanco;
					header("Location: outraPagina.php");
				}else{
					echo "<script> alert('Senha Incorreta!'); </script>";
					echo "<script> window.location = 'paginaInicial.php'; </script>";
				}
			}else{
				echo "<script> alert('Nome Incorreto!'); </script>";
				echo "<script> window.location = 'paginaInicial.php'; </script>";
			}
		}
	}elseif(isset($_GET["opcao"])){
		$opcao = $_GET["opcao"];
		if ($opcao == "Sair") {
			session_start();
			session_destroy();

			header("Location: paginaInicial.php");
		}
	}
?>
