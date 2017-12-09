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
		<div class="cadastro_cliente">
		<form name="cadastro" method="POST" action="controller_consulta_cli.php">
			<fieldset>
			<legend>Consultar Cliente</legend>	
			<table>
				
				<tr>
					<td>CPF/CNPJ: <br><input type="text" name="cpf_cnpj"></td>
				</tr>
				<tr>
					<td>Nome: <br><input type="text" name="nome_cliente"></td>
				</tr>

			</table>			
			<br><input type="submit" name="consultar" value="Consultar">
			<br><br/><a href="../cliente/cadastro_cliente.php">Cancelar</a>
			</fieldset>
		</form>
		</div>
</body>
</html>