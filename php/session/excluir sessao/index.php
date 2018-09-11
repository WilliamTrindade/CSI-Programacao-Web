<?php 

	session_start();
	if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
		echo 'Oi ', $_SESSION['nome'], '<br>', 'Senha ', $_SESSION['senha'];
	}
	

?>