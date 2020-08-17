<?php

include_once("conexao.php");



$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);


$result_aprov = "INSERT INTO leads (email) VALUES ('$email')";

$resultado_aprov = mysqli_query($conn, $result_aprov);


?>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulário de máquina</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>

@media  (min-width: 700px) {
  
body { width: 100%; overflow:hidden;}

}

@media  (max-width: 600px) {
  
input.tipotexto { width: 10%; }

}

input.tipotexto { width: 100%; }

textarea.tipotexto { width: 100%; }


  </style>

</head>
<body>

 <form  id="formulario" action="<? $PHP_SELF; ?>" method="POST"> 
 
  
  
  <input type="text" name="mail" required="" placeholder="UF" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3.5vh; width: 100%;"> 


  <center><input type="submit" name="BTEnvia" value="Enviar" style="background-color: #08528b; color: white; font-weight: 600; font-family: 'Open Sans', sans-serif; font-size: 18px; padding: 9px 30px; border-radius: 10px; border: none;"></center> 

 </form>

</body>
</html>