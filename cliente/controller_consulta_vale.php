<?php  

	//consulta vale presente

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
				
				$sql = "SELECT vl.cod_vale, cl.nome_cliente, vl.valor, date_format(vl.validade,'%d/%m/%y') as 'validade' FROM CLIENTE CL INNER JOIN VALE_PRESENTE VL ON CL.COD_CLIENTE = VL.COD_CLIENTE WHERE CL.COD_CLIENTE = $cod_cliente";
			}
				elseif (!empty($_POST["nome_cliente"])){
				
					$nome_cliente = $_POST["nome_cliente"];
				
					$sql = "SELECT vl.cod_vale, cl.nome_cliente, vl.valor, date_format(vl.validade,'%d/%m/%y') as 'validade' FROM CLIENTE CL INNER JOIN VALE_PRESENTE VL ON CL.COD_CLIENTE = VL.COD_CLIENTE WHERE CL.nome_cliente like '%$nome_cliente%'";
				}				

					else {	
						$erro = 1;
						echo "Você deve preencher 1 campo";
					}	

	//se não ocorrer erros, consulta vale

	if($erro == 0 ){
	
		$resultado = $pdo->query($sql);

		while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
				$cod_vale = $linha["cod_vale"];
				$nome_cliente = $linha["nome_cliente"];
				$valor = $linha["valor"];
				$validade = $linha["validade"];

				echo "Código vale: $cod_vale<br/>";
				echo "Nome: $nome_cliente<br/>";
				echo "Valor: R\$$valor<br/>";
				echo "Validade: $validade<br>";
				echo "<hr><br/>";

		}			
	
			echo "<br/><a href= 'form_consultar_vale.php'>Consultar outro cliente</a>";
			echo "<br/><a href= '../'>Retornar ao menu principal</a>";	

	}	