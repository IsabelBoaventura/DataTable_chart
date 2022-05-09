<?php
	/*$local = 'localhost';
	$database = 'simples_conversao';*/
	$user='root';
	$password='';
	//phpinfo();
	
	/*define( 'MYSQL_HOST', 'localhost' );
	define( 'MYSQL_USER', 'root' );
	define( 'MYSQL_PASSWORD', '' );
	define( 'MYSQL_DB_NAME', 'simples_web' );*/
	
	
	try {
		$conn_web = new PDO('mysql:host=localhost;dbname=simples_web' , $user , $password );
		$conn_web->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo ' <br> Sou a conexao com a banco: simples_web <br>';
	} catch(PDOException $e) {
		echo 'Erro ao conectar com o MySQL E O BANCO DE DADOS : ' . $e->getMessage();
	}

?>