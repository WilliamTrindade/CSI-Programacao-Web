$("#estado").on("change", function() {
	var idEstado = $("estado").val();
	$ajax({
		url:'busca_cidades.php',
		type:'POST',
		data:{id:idEstado}, 
	});
});