<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cor</title>
	</head>
	<body>
		<form action="cor.php" method="post">
			<label for="itxt"> Texto:</label>
			<input type="text" name="texto" id="itxt"><br><br>

			<label name="tamanho" for="itam">Tamaho</label>
			<select name="tamanho" id="itam" >
				<option value="8pt">8</option>
				<option value="10pt">10</option>
				<option value="14pt">14</option>
				<option value="20pt">20</option>
				<option value="40pt">40</option>
			</select><br><br>
			<label for="icor">Cor:</label>
			<input type="color" name="cor" id="cor"><br><br>
			<input type="submit" value="Gerar">
		</form> 
	</body>
</html>