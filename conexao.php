<?php

header ('Content-type: text/html; charset=UTF-8');

$servidor = "mysql01.lass.hospedagemdesites.ws";
$usuario = "lass";
$senha = "lass@epica2020";
$dbname = "lass";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//$conn->query('set character_set_client=utf8');
//$conn->query('set character_set_connection=utf8');
//$conn->query('set character_set_results=utf8');
//$conn->query('set character_set_server=utf8');

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>Conexão DB</title>	
		
	</head>