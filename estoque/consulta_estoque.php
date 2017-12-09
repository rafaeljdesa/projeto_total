<?php
	
	include "../conexao.php";
?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
		<div class="cadastro_estoque">
		<form method="POST" action="controller_consulta_estoque.php">
			<fieldset>
			<legend>Consulta Estoque</legend>
			<table>
				<tr>
					<td>Código: <br><input type="text" name="cod_produto"></td>
				</tr>
				<tr>
					<td>Produto: <br><input type="text" name="nome_produto"></td>
				</tr>
				<tr>
					<td>Loja: <br><input type="radio" name="loja" value="A">A
							  <input type="radio" name="loja" value="B">B
							  <input type="radio" name="loja" value="A/B" checked>A/B</td>
				</tr>
				
			</table>			
			<br><input type="submit" name="consultar" value="Consultar">
			<br><br><a href="../">Cancelar</a>
		</form>
		
		</fieldset>
		</div>
</body>
</html>