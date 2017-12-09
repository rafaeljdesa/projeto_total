<?php
	
		$codigo = $_POST["codigo"];
		$pessoa = $_POST["pessoa"];
		if($pessoa == "Física"){
			$pessoa = 1;
		}else{
			$pessoa = 0;
		}
		$cnpj_cpf = $_POST["cnpj_cpf"];
		$nome_cliente = $_POST["nome_cliente"];
		$endereco = $_POST["endereco"];
		$numero = $_POST["numero"];
		$complemento = $_POST["complemento"];
		$cidade = $_POST["cidade"];
		$bairro = $_POST["bairro"];
		$uf = $_POST["uf"];
		$cep = $_POST["cep"];
		$email = $_POST["email"];
		$telefone = $_POST["telefone"];



?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar Cliente</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	
</head>
<body>
	<div class="cadastro_cliente">
	<fieldset>
	<legend>Alteração de Cliente</legend>
	<form name="cad_cliente" method="POST"  action="altera_cliente_bd.php">
		
			<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

		<table>	
			
			<tr>
				<td>Pessoa: <br><input type="radio" name="pessoa" value="Física"<?php if($pessoa == 1){echo 'checked';} ?> >Física
							<input type="radio" name="pessoa" value="Jurídica" <?php if($pessoa == 0){echo 'checked';} ?> >Jurídica</td>	
			</tr>
			<tr>
				<td>CPF/CNPJ: <br><input type="text" name="cnpj_cpf" value="<?php echo $cnpj_cpf; ?>"></td> 
			</tr>
			<tr>
				<td>Nome: <br><input  type="text" name="nome_cliente" value="<?php echo $nome_cliente; ?>"></td>
			</tr>	
			<tr>			
				<td>Endereço: <br><input  type="text" name="endereco" value="<?php echo $endereco; ?>"></td>
			</tr>
			<tr>
				<td>Número: <br><input  type="text" name="numero" value="<?php echo $numero; ?>"></td>
			</tr>
			<tr>	
				<td>Complemento: <br><input  type="text" name="complemento" value="<?php echo $complemento; ?>"></td>
			</tr>
			<tr>
				<td>Cidade: <br><input  type="text" name="cidade" value="<?php echo $cidade; ?>"></td>
			</tr>
			<tr>
				<td>Bairro: <br><input  type="text" name="bairro" value="<?php echo $bairro; ?>"></td>
			</tr>
			<tr>	
				<td>UF: <br><input  type="text" name="uf" value="<?php echo $uf; ?>"></td>
			</tr>
			<tr>
				<td>CEP: <br><input  type="text" name="cep" value="<?php echo $cep; ?>"></td>
			</tr>
			<tr>
				<td>E-mail: <br><input  type="email" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>	
				<td>Telefone: <br><input  type="text" name="telefone" value="<?php echo $telefone; ?>"></td>
			</tr>
	
			<tr>
				<td><input type="submit" name="operacao" value="Alterar" >
					<input type="submit" name="operacao" value="Excluir" ></td>
			</tr>

		</table>								
	</form>
		<br/><a href="../">Cancelar</a>
	</fieldset>	
</form>
</div>
</body>
</html>