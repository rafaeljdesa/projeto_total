<?php
	
		//conexão com o banco de dados

		try{
			$pdo = new PDO("mysql:host=localhost;dbname=db_total","root","");
		} catch(PDOException $e){
			echo $e->getMessage();
		}	

?>