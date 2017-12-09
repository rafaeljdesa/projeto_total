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
		<div class="cadastro_funcionario">
		<form name="cadastro" method="POST" action="controller_consulta_func.php">
			<fieldset>
			<legend>Consulta funcionário</legend>
			<table>
				<tr>
					<td>Código: <br><input type="text" name="codigo"></td>
				</tr>
				<tr>
					<td>CPF: <br><input type="text" name="cpf"></td>
				</tr>
				<tr>
					<td>Nome: <br><input type="text" name="nome"></td>
				</tr>
				<tr>
					<td>Loja: <br><input type="radio" name="loja" value="A">A
							  <input type="radio" name="loja" value="B">B
							  <input type="radio" name="loja" value="A/B" checked>A/B</td>
				</tr>
				
			</table>			
			<input type="submit" name="consultar" value="Consultar">
			<br><br><a href="../">Cancelar</a>
		</fieldset>		
		
		</form>
		
		</div>
</body>
</html>
