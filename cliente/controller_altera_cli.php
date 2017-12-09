<?php
	
	include "conexao.php";

	if (isset($_POST["alterar"])){
		$codigo = $_POST["codigo"];
		$nome_cliente = $_POST["nome"];

		$sql = "UPDATE CLIENTE SET nome_cliente = '$nome_cliente' WHERE cod_cliente = $codigo";

		$pdo->query($sql);
	}

	if (isset($_POST["excluir"])){
		$codigo = $_POST["codigo"];
		$nome_cliente = $_POST["nome"];

		$sql = "DELETE FROM CLIENTE WHERE cod_cliente = $codigo";

		$pdo->query($sql);
	}
		