<?php  

	//consulta estoque

	include "../conexao.php";

	$erro = 0;
	
	//testa campos em branco e atribui sql a consulta

	if (!empty($_POST["cod_produto"]) && !empty($_POST["nome_produto"])){
		echo "Você deve preencher somente 1 campo";
		$erro = 1;
	}
	
			elseif (!empty($_POST["cod_produto"])){
				
				$cod_produto = $_POST["cod_produto"];
				
				$loja = $_POST["loja"];

				if ($loja == 'A/B'){

					$sql = "SELECT * FROM produto WHERE cod_produto = $cod_produto";

				}	else{
				
						$sql = "SELECT * FROM produto WHERE cod_produto = $cod_produto AND loja = '$loja'";
				
					}
			}
				elseif (!empty($_POST["nome_produto"])){
				
					$nome_produto = $_POST["nome_produto"];
				
					$loja = $_POST["loja"];

					if ($loja == 'A/B'){

						$sql = "SELECT * FROM produto WHERE nome_produto like '%$nome_produto%'";

					}	else{
				
							$sql = "SELECT * FROM produto WHERE nome_produto like '%$nome_produto%' AND loja = '$loja'";
				
						}				
				}			
					else {	
						$erro = 1;
						echo "Você deve preencher 1 campo";
					}	

	//se não ocorrer erros , realiza a consulta

	if($erro == 0 ){
	
		$resultado = $pdo->query($sql);

		while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
				$cod_produto = $linha["cod_produto"];
				$nome_produto = $linha["nome_produto"];
				$quantidade = $linha["quantidade"];
				$preco_venda = $linha["preco_venda"];
				$loja = $linha["loja"];
				
				echo "Código: $cod_produto<br/>";
				echo "Produto: $nome_produto<br/>";
				echo "Quantidade: $quantidade<br/>";
				echo "Preço de venda: R\$$preco_venda<br/>";
				echo "Loja: $loja<br/>";
				echo "<hr><br/>";

		}			
	
			echo "<br/><a href= 'consulta_estoque.php'>Consultar outro produto</a>";
			echo "<br/><a href= '../'>Retornar ao menu principal</a>";	

	}	