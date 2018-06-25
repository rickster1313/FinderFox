<?php 
	GLOBAL $pdo;
	define("BASE_URL","http://".$_SERVER['SERVER_NAME']."/finderfox/");
	try {
		$pdo = new PDO("mysql:dbname=finderfox;host=localhost", "root", "");
	} catch (PDOException $e) {
		echo "erro: ".$e->getMessage();
		exit;
	}
?>