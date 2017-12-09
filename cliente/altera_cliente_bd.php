<?php 

	//altera cliente no banco de dados

	include "../conexao.php";

		$codigo = $_POST["codigo"];
		$pessoa = $_POST["pessoa"];
		if($pessoa == "Física"){
			$pessoa = 1;
		}else{
			$pessoa = 0;
		}
		$cnpj_cpf = $_POST["cnpj_cpf"];
		$nome_cliente = $_POST["nome_cliente"];
		$endereco = $_POST["endereco"];
		$numero = $_POST["numero"];
		$complemento = $_POST["complemento"];
		$cidade = $_POST["cidade"];
		$bairro = $_POST["bairro"];
		$uf = $_POST["uf"];
		$cep = $_POST["cep"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"]; 

		if ($_POST["operacao"] == "Alterar"){	

		$sql = "UPDATE CLIENTE SET pessoa = $pessoa, cnpj_cpf = '$cnpj_cpf', nome_cliente = '$nome_cliente', endereco = '$endereco', numero = '$numero', complemento = '$complemento', cidade = '$cidade', bairro = '$bairro', uf = '$uf', cep = '$cep', email = '$email', telefone = '$telefone' WHERE cod_cliente = '$codigo'";
		
		$pdo->query($sql);

		echo "Cliente Alterado com sucesso!";

		}else{

			$sql = "DELETE FROM CLIENTE WHERE cod_cliente = '$codigo'";
		
			$pdo->query($sql);

			echo "Cliente Excluido com sucesso!";

		}	

		



	
	echo "<br/><a href= 'form_consultar_cliente.php'>Consultar outro cliente</a>";
	echo "<br/><a href= '../'>Retornar ao menu principal</a>";
	
?>