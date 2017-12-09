<?php
	
	//com base na opção que o usuário clicou na pagina de cadastro de clientes, abre o formulário para cadastro, consulta, alteração ou exclusao de clientes 

	if($_POST["cadastrar_cliente"])	{
		header('location: form_cadastrar_cliente.php');
	}	elseif($_POST["consultar_cliente"]){
			header('location: form_consultar_cliente.php');
		}	elseif($_POST["consultar_cartao"]){
				header('location: form_consultar_cartao.php');
			}	elseif($_POST["consultar_vale"]){
					header('location: form_consultar_vale.php');
				}	