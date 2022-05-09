<?php
	$local = 'localhost';
	$database = 'celke';
	$user='isabel';
	$password='123456';
	//phpinfo();
	
	/*define( 'MYSQL_HOST', 'localhost' );
	define( 'MYSQL_USER', 'root' );
	define( 'MYSQL_PASSWORD', '' );
	//define( 'MYSQL_DB_NAME', 'planilha_freeline' );
	define( 'MYSQL_DB_NAME', 'simples_conversao' );*/
	

	
	try {
		$conn = new PDO('mysql:host='.$local.';dbname='.$database , $user , $password );
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			// echo ' <br> Sou a conexao com a banco: '.$database.'<br>';
		
		/*$sql = "SELECT * FROM conv_produto";
		$result = $conn->query( $sql );
		$rows = $result->fetchAll();*/
		 //print_r( $rows );
	} catch(PDOException $e) {
		echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
	}
	
	
	
	

?>