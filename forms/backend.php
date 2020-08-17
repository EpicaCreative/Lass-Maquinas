<?php




if (isset($_POST['BTEnvia'])) {
 
 //Variaveis de POST, Alterar somente se necessário 
 //====================================================
 
 $form = 'locacao';

 $nome = $_POST['nome_cliente'];

 $email = $_POST['email_cliente'];

 $telefone = $_POST['telefone_cliente'];

 $mensagem = $_GET['oque'];

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
 $email_destinatario = "guiosimura@hotmail.com, gustavo@epicacreative.com.br, jessika@epicacreative.com.br, carlos@epicacreative.com.br"; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Novo Lead"; // Este será o assunto da empresa
 //====================================================
 
 //Monta o Corpo da Mensagem
 //====================================================

 $email_conteudo = "Nome = $nome $sobre \n"; 
 $email_conteudo .= "Email = $email , $contato \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Empresa = $empresa \n"; 
 $email_conteudo .= "Ramo = $ramo \n"; 

 //====================================================
 
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "<img src='success.png'>"; 
 echo "<style> #formu { display: none; } </style>";
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 //====================================================
} 



//$result_aprov = "INSERT INTO leads (enviado, origem, campanha, uf, cidade, nome, email, contato, telefone, empresa, ramo) VALUES (NOW(),'$origem', '$campanha' , '$uf', '$cidade', '$nome', '$email', '$contato', '$telefone', '$empresa', '$ramo')";

//$resultado_aprov = mysqli_query($conn, $result_aprov);


?>