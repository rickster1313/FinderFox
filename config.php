<?php 
	GLOBAL $pdo;
	define("BASE_URL","http://localhost/finderfox/");
	try {
		$pdo = new PDO("mysql:dbname=finderfox;host=localhost", "root", "");
	} catch (PDOException $e) {
		echo "erro: ".$e->getMessage();
		exit;
	}
?>