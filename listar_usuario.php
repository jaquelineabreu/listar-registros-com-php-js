<?php
	include_once "conexao.php";

	//consultar no banco de dados
	$dados_usuario = "select * from mensagens order by id desc";
	$resultado_usuario = mysqli_query($conn,$dados_usuario);


	//verificar resltado na tabela
	if(($resultado_usuario) and ($resultado_usuario->num_rows!=0)){

		while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
			echo $row_usuario['nome'] . "<br>";
		}

	}else{

		echo "Nenhum usuário encontrado";

	}


?>



