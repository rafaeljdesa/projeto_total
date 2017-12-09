<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<h1>O que deseja fazer ?</h1>
	<form name="cad" method="POST" action="controller_cad_cli.php">
		<input class="botao" type="submit" name="cadastrar_cliente" value="Cadastrar Clientes">
		<input class="botao" type="submit" name="consultar_cliente" value="Consultar Clientes">
		<input class="botao" type="submit" name="consultar_cartao" value="Consultar Cartão Fidelidade">
		<input class="botao" type="submit" name="consultar_vale" value="Consultar Vale Presente">
	</form>	
	<br><a href= '../'>Cancelar</a>
</body>
</html>
