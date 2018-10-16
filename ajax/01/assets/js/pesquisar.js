//alert("ola w");
$(function(){
	$('#pesquisa').keyup(function(){
			var pesquisa = $(this).val();
			if(pesquisa != ''){
				var dados = {
					palavra : pesquisa
				}
				$.post('../../model/busca.php', dados, function(retorna){
					$('.table-results').html(retorna);
				});
			}else{
				var dados = {
					palavra : "tudo"
				}
				$.post('../../model/busca.php', dados, function(retorna){
					$('.table-results').html(retorna);
				});
			}
	});
});
alert("ola");