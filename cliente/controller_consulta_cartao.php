<?php  

	//consulta cartao

	include "../conexao.php";

	$cod_cliente = $_POST["cod_cliente"];
	$nome_cliente = $_POST["nome_cliente"];

	//testa campos em branco e atribui sql para consulta

	$erro = 0;
	
	if (!empty($_POST["cod_cliente"]) && !empty($_POST["nome_cliente"])){
		echo "Você deve preencher somente 1 campo";
		$erro = 1;
	}
	
			elseif (!empty($_POST["cod_cliente"])){
				
				$cod_cliente = $_POST["cod_cliente"];
				
				$sql = "SELECT fd.cod_cartao, fd.cod_cliente, cl.nome_cliente, fd.pontos, date_format(fd.validade,'%d/%m/%y') as 'validade' FROM fidelidade	fd INNER JOIN cliente cl on cl.cod_cliente = fd.cod_cliente WHERE fd.cod_cliente = $cod_cliente";
			}
				elseif (!empty($_POST["nome_cliente"])){
				
					$nome_cliente = $_POST["nome_cliente"];
				
					$sql = "SELECT fd.cod_cartao, fd.cod_cliente, cl.nome_cliente, fd.pontos, date_format(fd.validade,'%d/%m/%y') as 'validade' FROM fidelidade	fd INNER JOIN cliente cl on cl.cod_cliente = fd.cod_cliente WHERE cl.nome_cliente like '%$nome_cliente%' ";
				}				

					else {	
						$erro = 1;
						echo "Você deve preencher 1 campo";
					}	

	//se não ocorrer erros, realiza a consulta

	if($erro == 0 ){
	
		$resultado = $pdo->query($sql);

		while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
				$cod_cartao = $linha["cod_cartao"];
				$cod_cliente = $linha["cod_cliente"];
				$nome_cliente = $linha["nome_cliente"];
				$pontos = $linha["pontos"];
				$validade = $linha["validade"];

				echo "Código cartão: $cod_cartao<br/>";
				echo "Nome: $nome_cliente<br/>";
				echo "Pontos: $pontos<br/>";
				echo "Validade: $validade<br>";
				echo "<hr><br/>";

		}			
	
			echo "<br/><a href= 'form_consultar_cartao.php'>Consultar outro cliente</a>";
			echo "<br/><a href= '../'>Retornar ao menu principal</a>";	
	}	