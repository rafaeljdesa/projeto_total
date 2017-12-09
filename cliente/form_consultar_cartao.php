<!DOCTYPE html>
<html>
<head>
	<title>Consultar cartão</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<div class="cadastro_cartao">
	<form method="POST" name="consulta_cartao" action="controller_consulta_cartao.php">
		<fieldset>
			<legend>Consulta cartão fidelidade</legend>
			<label>Cód. Cliente:</label><br><input type="text" name="cod_cliente"><br>
			<label>Nome:</label><br><input type="text" name="nome_cliente"><br>
			<br><input type="submit" name="consultar" value="Consultar">
			<br><br><a href="../cliente/cadastro_cliente.php">Cancelar</a>
		</fieldset>	
		
	</form>
	</div>
</body>
</html>