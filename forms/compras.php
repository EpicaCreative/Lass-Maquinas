<?php

include_once("conexao.php");


if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 
 $form = 'compra';

 $nome = $_POST['nome_cliente'];

 $email = $_POST['email_cliente'];

 $telefone = $_POST['telefone_cliente'];

 $mensagem = $_GET['maquina'];

 $cidade = $_POST['cidade_cliente'];

 $uf = $_POST['uf_cliente'];

 $origem = $_GET['utm_source']; 



 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "site@lass.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "compras@lass.com.br, gustavo@epicacreative.com.br"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Formulário do site - $form de $mensagem"; // Este será o assunto da empresa
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================

 $email_conteudo = "$nome de $cidade - $uf \n"; 
 $email_conteudo .= "deseja $form de $mensagem \n";
 $email_conteudo .= "Telefone de $nome é $telefone \n"; 
 $email_conteudo .= "Email $email \n"; 
 $email_conteudo .= "Rede social/campanha: $origem \n"; 

 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "enviado com sucesso"; 
 echo "<style> #formu { display: none; } </style>";
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 

$nome = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone_cliente', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'maquina', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade_cliente', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf_cliente', FILTER_SANITIZE_STRING);
$origemm = filter_input(INPUT_POST, $origem, FILTER_SANITIZE_STRING);

$result_aprov = "INSERT INTO leads (formulario, nome, email, telefone, mensagem, cidade, uf, origem) VALUES ('$nome', '$email' , '$telefone', '$mensagem', '$cidade', '$uf', '$origemm')";

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
 
  <input type="text" name="nome_cliente" required="" placeholder="Nome" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="email_cliente" required="" placeholder="E-mail" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="telefone_cliente" required="" placeholder="Telefone" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh;"> 

  <input type="text" name="cidade_cliente" required="" placeholder="Cidade" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3vh; width: 100%;"> 
  
  <input type="text" name="uf_cliente" required="" placeholder="UF" class="tipotexto" style="background-color: #ededed; border: none;  height: 9vh; padding-left: 10px; margin-bottom: 3.5vh; width: 100%;"> 


  <center><input type="submit" name="BTEnvia" value="Enviar" style="background-color: #08528b; color: white; font-weight: 600; font-family: 'Open Sans', sans-serif; font-size: 18px; padding: 9px 30px; border-radius: 17px; border: none;"></center> 

 </form>

</body>
</html>