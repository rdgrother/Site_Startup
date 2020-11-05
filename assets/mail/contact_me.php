<?php

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include ('PHPMailer-master/PHPMailerAutoload.php'); 
include("./phpmailer/class.phpmailer.php"); 
include("./phpmailer/class.smtp.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$senhamensagem = $_POST['mensagem'];

 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

 
// MÃ©todo de envio 
$mail->isSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "smtp.idstartup.com.br";
 
// Voce pode alterar este parametro para o endereÃ§o de SMTP do seu provedor 
$mail->Port = 465; 
 
 
// Usar autenticacao SMTP (obrigatorio) 
$mail->SMTPAuth = true; 
 
// Usuario do servidor SMTP (endereco de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'contato@idstartup.com.br'; 
$mail->Password = 'dw4dzvtw3cvq'; 
 
// Configurações de compatibilidade para autenticacao em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// VocÃª pode habilitar esta opÃ§Ã£o caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "contato@idstartup.com.br"; 
 
// Seu nome 
$mail->FromName = "Contato Idstartup";
 
// Define o(s) destinatario(s), como no exemplo
$mail->AddAddress('contato@idstartup.com.br', 'Destinatario'); 
 
 
// Definir se o e-mail e em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Assunto da mensagem"; 
 
// Corpo do email 
$mail->Body = 'Aqui entra o conteudo texto do email'; 
 
// Envia o e-mail aqui
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 
?>
      
