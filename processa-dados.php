<?php

include_once("conexao.php");



$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);


$result_aprov = "INSERT INTO Leads (email) VALUES ('$email')";

$resultado_aprov = mysqli_query($conn, $result_aprov);


?>
