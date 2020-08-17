<?php

include_once("conexao.php");

    



 $form = 'locacao';

 $nome = $_POST['nome_cliente'];

 $email = $_POST['email_cliente'];

 $telefone = $_POST['telefone_cliente'];

 $mensagem = $_POST['maquina_deseja'];

 $cidade = $_POST['cidade_cliente'];

 $uf = $_POST['uf_cliente'];

 $origem = $_GET['utm_source'];
 
     $corpo = "$nome de $cidade - $uf <br> deseja $form de $mensagem <br> Telefone de $nome é $telefone <br> Email $email <br> Rede social/campanha: $origem";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    $mail = new PHPMailer(TRUE);

    try {
   
       $mail->setFrom('lass@epicacreative.com.br', 'Website LASS Máquinas');
       $mail->addAddress("guiosimura@hotmail.com", 'Responsável');
       $mail->CharSet = 'UTF-8';
       $mail->Subject = 'Formulário do site - $form de $mensagem';
       $mail->isHTML(true);
       $mail->Body = $corpo;
       $mail->isSMTP();
       $mail->Host = 'mail.epicacreative.com.br';
       $mail->SMTPAuth = TRUE;
       $mail->SMTPSecure = 'tls';
       $mail->Username = 'lass@epicacreative.com.br';
       $mail->Password = 'lassmaq2020';
       $mail->Port = 465;
   
       /* Enable SMTP debug output. */
       $mail->SMTPDebug = 4;
   
       $mail->send();

       echo '$nome email enviado com sucesso....';
    }
    catch (Exception $e)
    {
       echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
       echo $e->getMessage();
    }







//$result_aprov = "INSERT INTO leads (formulario, nome, email, telefone, mensagem, cidade, uf, origem) VALUES ('$nome', '$email' , '$telefone', '$mensagem', '$cidade', '$uf', '$origem')";

//$resultado_aprov = mysqli_query($conn, $result_aprov);


?>