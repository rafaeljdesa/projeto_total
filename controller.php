<?php
	
	//com base na opção que o usuário clicou na home page, abre o arquivo com as opções de menu para cadastro de cliente, consulta de funcionário ou consulta de estoque 

	if($_POST["cadastro_cliente"]){
		header('location: cliente/cadastro_cliente.php');
	}	elseif($_POST["consulta_funcionario"]){
			header('location: funcionario/consulta_funcionario.php');
		}	elseif($_POST["consulta_estoque"]){
				header('location: estoque/consulta_estoque.php');
			}

	
