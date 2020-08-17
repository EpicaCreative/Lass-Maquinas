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

$nome = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone_cliente', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'maquina', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade_cliente', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf_cliente', FILTER_SANITIZE_STRING);
$origemm = filter_input(INPUT_POST, $origem, FILTER_SANITIZE_STRING);

$result_aprov = "INSERT INTO leads (formulario, nome, email, telefone, mensagem, cidade, uf, origem) VALUES ('$nome', '$email' , '$telefone', '$mensagem', '$cidade', '$uf', '$origemm')";

$resultado_aprov = mysqli_query($conn, $result_aprov);

 //====================================================
 
 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "site@lass.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
 
 //Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "guiosimura@hotmail.com, gustavo@epicacreative.com.br, jessika@epicacreative.com.br, carlos@epicacreative.com.br"; // pode ser qualquer email que receberá as mensagens
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




?>