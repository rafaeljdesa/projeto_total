<!DOCTYPE html>
<html>
<head>
	<title>Consultar vale</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<div class="cadastro_vale">
	<form method="POST" name="consulta_vale" action="controller_consulta_vale.php">
		<fieldset>
			<legend>Consulta vale presente</legend>
			<label>Cód. Cliente:<br></label><input type="text" name="cod_cliente"><br>
			<label>Nome:</label><br><input type="text" name="nome_cliente"><br>
			<br><input type="submit" name="consultar" value="Consultar">
			<br><br><a href="../cliente/cadastro_cliente.php">Cancelar</a>
		</fieldset>	
	</form>
	
	</div>
</body>
</html>