<?php  
	
	//consulta cliente no banco de dados

	include "../conexao.php";
	
	//testa campos em branco e atribui sql para consulta

	$erro = 0;
	

	if (!empty($_POST["cpf_cnpj"]) && !empty($_POST["nome_cliente"])){
		echo "Você deve preencher somente 1 campo";
		$erro = 1;
	}
	
			elseif (!empty($_POST["cpf_cnpj"])){
				
				$cpf_cnpj = $_POST["cpf_cnpj"];
				
				$sql = "SELECT * FROM CLIENTE WHERE cnpj_cpf = $cpf_cnpj";
			}
				elseif (!empty($_POST["nome_cliente"])){
				
					$nome_cliente = $_POST["nome_cliente"];
				
					$sql = "SELECT * FROM CLIENTE WHERE nome_cliente like '%$nome_cliente%'";
				}				

					else {	
						$erro = 1;
						echo "Você deve preencher 1 campo";
					}	

	//se não ocorrer erros, consulta cliente 

	if($erro == 0 ){
	
		$resultado = $pdo->query($sql);

		while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
				$codigo = $linha["cod_cliente"];
				$pessoa = $linha["pessoa"];
				if($pessoa == 1){
					$pessoa = "Física";
				}else{
					$pessoa = "Jurídica";
				}
				$cnpj_cpf = $linha["cnpj_cpf"];
				$nome_cliente = $linha["nome_cliente"];
				$endereco = $linha["endereco"];
				$numero = $linha["numero"];
				$complemento = $linha["complemento"];
				$cidade = $linha["cidade"];
				$bairro = $linha["bairro"];
				$uf = $linha["uf"];
				$cep = $linha["cep"];
				$email = $linha["email"];
				$telefone = $linha["telefone"];

				echo "Código: $codigo<br/>";
				echo "Pessoa: $pessoa<br/>";
				echo "CNPJ/CPF: $cnpj_cpf<br/>";
				echo "Nome: $nome_cliente<br/>";
				echo "Endereço: $endereco<br/>";
				echo "Número: $numero<br/>";
				echo "Complemento: $complemento<br/>";
				echo "Cidade: $cidade<br/>";
				echo "Bairro: $bairro<br/>";
				echo "UF: $uf<br/>";
				echo "CEP: $cep<br/>";
				echo "Email: $email<br/>";
				echo "Telefone: $telefone<br/><br/>";
				echo "<form method='POST' action= 'form_alterar_cliente.php'><input type='submit' name='alterar_excluir' value='Alterar/Excluir'>

					<input type='hidden' name='codigo' value='$codigo'>
					<input type='hidden' name='pessoa' value='$pessoa'>
					<input type='hidden' name='cnpj_cpf' value='$cnpj_cpf'>
					<input type='hidden' name='nome_cliente' value='$nome_cliente'>
					<input type='hidden' name='endereco' value='$endereco'>
					<input type='hidden' name='numero' value='$numero'>
					<input type='hidden' name='complemento' value='$complemento'>
					<input type='hidden' name='cidade' value='$cidade'>
					<input type='hidden' name='bairro' value='$bairro'>
					<input type='hidden' name='uf' value='$uf'>
					<input type='hidden' name='cep' value='$cep'>
					<input type='hidden' name='email' value='$email'>
					<input type='hidden' name='telefone' value='$telefone'>

					</form>";
				echo "<hr><br/>";

		}			
	
			echo "<br/><a href= 'form_consultar_cliente.php'>Consultar outro cliente</a>";
			echo "<br/><a href= '../'>Retornar ao menu principal</a>";	
	}	
?>



