<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Cor</title>
		<?php 
			$tamanho = $_POST["tamanho"];
			$cor = $_POST["cor"];
		?>
		<style type="text/css">
			
			span.texto{
				font-size: <?php echo $tamanho; ?>;
				color: <?php echo $cor;?>;

			}

		</style>

	</head>

	<body>

		<div>

			<?php 
			
				$txt = $_POST["texto"];
				echo "<span class='texto'> $txt </span>";

			?>
			<a href="index.php">Voltar</a>

		</div>
		
	</body>

</html>