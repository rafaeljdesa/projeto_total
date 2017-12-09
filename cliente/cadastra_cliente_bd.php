<?php  
	
	//cadastra cliente no banco de dados

	include "../conexao.php";

	$pessoa = $_POST["pessoa"];
	
	if($pessoa == "fisica"){
		$pessoa = 1;
	}else($pessoa = 0);	
	
	$cpf_cnpj = $_POST["cpf/cnpj"];

	$nome = $_POST["nome"];

	$endereco = $_POST["endereco"];

	$numero = $_POST["numero"];

	$complemento = $_POST["complemento"];

	$cidade = $_POST["cidade"];

	$bairro = $_POST["bairro"];

	$uf = $_POST["uf"];

	$cep = $_POST["cep"];

	$email = $_POST["email"];

	$telefone = $_POST["telefone"];

	$status = $_POST["status"];

	if($status == "ativo"){
		$status = 1;
	}else($status = 0);

	$sql = "INSERT INTO CLIENTE VALUES (DEFAULT,$pessoa,'$cpf_cnpj','$nome','$endereco','$numero','$complemento','$cidade','$bairro','$uf','$cep','$email','$telefone',$status)";

	$pdo->query($sql);

	echo "Cliente Cadastrado com sucesso!";
	
	echo "<br/><a href= '../'>Retornar ao menu principal</a>";
	
