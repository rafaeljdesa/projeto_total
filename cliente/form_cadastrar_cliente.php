<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
</head>
<body>
	<div class="cadastro_cliente">
	<fieldset>
	<legend>Cadastro de Clientes</legend>	
	<form name="cad_cliente" method="POST"  action="cadastra_cliente_bd.php">
		<table>	
			<tr>
				<td>Pessoa: <br><input type="radio" name="pessoa" value="fisica" checked>Física
							<input type="radio" name="pessoa" value="juridica">Jurídica</td>	
			</tr>
			<tr>
				<td>CPF/CNPJ: <br><input type="text" name="cpf/cnpj" ></td> 
			</tr>
			<tr>
				<td>Nome: <br><input  type="text" name="nome"></td>
			</tr>	
			<tr>			
				<td>Endereço: <br><input  type="text" name="endereco"></td>
			</tr>
			<tr>
				<td>Número: <br><input  type="text" name="numero"></td>
			</tr>
			<tr>	
				<td>Complemento: <br><input  type="text" name="complemento"></td>
			</tr>
			<tr>
				<td>Cidade: <br><input  type="text" name="cidade"></td>
			</tr>
			<tr>
				<td>Bairro: <br><input  type="text" name="bairro"></td>
			</tr>
			<tr>	
				<td>UF: <br><input  type="text" name="uf"></td>
			</tr>
			<tr>
				<td>CEP: <br><input  type="text" name="cep"></td>
			</tr>
			<tr>
				<td>E-mail: <br><input  type="email" name="email"></td>
			</tr>
			<tr>	
				<td>Telefone: <br><input  type="text" name="telefone"></td>
			</tr>
			<tr>
				<td>Status: <br><input type="radio" name="status" value="ativo" checked>Ativo
					<input type="radio" name="status" value="inativo">Inativo</td>
			</tr>
			<tr>
				<td><input type="submit" name="cadastrar" value="Cadastrar"></td>
			</tr>
		</table>								
	</form>
		<br/><a href="../cliente/cadastro_cliente.php">Cancelar</a>
	</form>
	</fieldset>
	</div>
</body>
</html>