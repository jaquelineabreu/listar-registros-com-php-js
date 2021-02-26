

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>

		<span id="conteudo"></span>
		<script>
			$(document).ready(function (){
				$.post('listar_usuario.php',function(retorna){
					//Substituindo o valor no seletor 
					$("#conteudo").html(retorna);

				});

			
			});
		</script>
		


	</body>
</html>