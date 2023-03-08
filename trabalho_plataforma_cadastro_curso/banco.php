<?php

//$ip_1= "192.168.20.18";
//$ip_2= "200.19.1.18";
$bd_host = "200.19.1.18";
$sgbd = "pgsql";
$base_de_dados = "gilvangoncalves";
$bd_usuario = "gilvangoncalves";
$bd_senha = "123456";

switch ($sgbd) {

    case "pgsql":
		try {
			$dsn_pgsql = "pgsql:host=$bd_host;port=5432;dbname=$base_de_dados;";
			// make a database connection
			$conn = new PDO(
				$dsn_pgsql,
				$bd_usuario,
				$bd_senha,
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
			);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
        break;
    
}

?>
