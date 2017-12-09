<?php  
	
	//consulta funcionários

	include "../conexao.php";
	
	//testa campos em branco e atribui sql a consulta

	$erro = 0;
	
	if (!empty($_POST["codigo"]) && !empty($_POST["cpf"]) && !empty($_POST["nome"])){
		$erro = 1;
		echo "Você deve preencher somente 1 campo";
		echo "<br><a href='../funcionario/consulta_funcionario.php'>Voltar</a> ";
	}	
		elseif	((!empty($_POST["codigo"]) && !empty($_POST["cpf"])) || (!empty($_POST["codigo"]) && !empty($_POST["nome"])) ||  (!empty($_POST["cpf"]) && !empty($_POST["nome"])) ){
				$erro = 1;
				echo "Você deve preencher somente 1 campo";
				echo "<br><a href='../funcionario/consulta_funcionario.php'>Voltar</a> ";
		}

			elseif ( !empty($_POST["codigo"]) && empty($_POST["cpf"]) && empty($_POST["nome"]) ){
				
				$codigo = $_POST["codigo"];

				$loja = $_POST["loja"];

				if ($loja == 'A/B'){

					$sql = "SELECT * FROM funcionario WHERE COD_funcionario = '$codigo'";

				}else{
				
					$sql = "SELECT * FROM funcionario WHERE COD_funcionario = $codigo AND LOJA = '$loja'";
				
				}
			}	
				elseif (!empty($_POST["cpf"]) && empty($_POST["codigo"]) && empty($_POST["nome"]) ){
					
					$cpf = $_POST["cpf"];
					
					$loja = $_POST["loja"];

					if ($loja == 'A/B'){

						$sql = "SELECT * FROM funcionario WHERE cpf = $cpf";

					}else{
				
						$sql = "SELECT * FROM funcionario WHERE cpf = $cpf AND LOJA = '$loja'";
				
					}

				
				}
					elseif (!empty($_POST["nome"]) && empty($_POST["cpf"]) && empty($_POST["codigo"]) ){
					
						$nome = $_POST["nome"];
					
					
						$loja = $_POST["loja"];

						if ($loja == 'A/B'){

							$sql = "SELECT * FROM funcionario WHERE nome like '%$nome%'";

						}else{
				
							$sql = "SELECT * FROM funcionario WHERE nome like '%$nome%' AND loja = '$loja'";
				
						}
						
					}	
						else {	
							$erro = 1;
							echo "Você deve preencher 1 campo";
							echo "<br><a href='../funcionario/consulta_funcionario.php'>Voltar</a> ";
						}	

	//se não ocorrer erros, realiza a consulta

	if($erro == 0 ){
	
		$resultado = $pdo->query($sql);


		while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

				$codigo = $linha["cod_funcionario"];
				$cpf = $linha["cpf"];
				$nome = $linha["nome"];
				$endereco = $linha["endereco"];
				$numero = $linha["numero"];
				$complemento = $linha["complemento"];
				$cidade = $linha["cidade"];
				$bairro = $linha["bairro"];
				$uf = $linha["uf"];
				$cep = $linha["cep"];
				$email = $linha["email"];
				$telefone = $linha["telefone"];
				$loja = $linha["loja"];
				$ativo = $linha["ativo"];
						
				if($ativo == 1){
					$ativo = "Sim";
				}	else{ 
					$ativo = "Não";
				}

				echo "Código: $codigo<br/>";
				echo "CPF: $cpf<br/>";
				echo "Nome: $nome<br/>";
				echo "Endereço: $endereco<br/>";
				echo "Número: $numero<br/>";
				echo "Complemento: $complemento<br/>";
				echo "Cidade: $cidade<br/>";
				echo "Bairro: $bairro<br/>";
				echo "UF: $uf<br/>";
				echo "CEP: $cep<br/>";
				echo "Email: $email<br/>";
				echo "Telefone: $telefone<br/>";
				echo "Loja: $loja<br/>";
				echo "Ativo: $ativo<br/>";
				echo "<hr><br/>";
		}				
	}	
?>