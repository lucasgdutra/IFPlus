<?php

//Classe requirida
require './PHPMailer-master/class.phpmailer.php';

//Chamada de classe e definição do idioma
$mail = new PHPMailer();
$mail->setLanguage('pt-br');

//Definições de email e nome do remetente
$from = 'ifplus@dipolo.com';
$fromName = "IFPLUS";

//Definições de entrada (Nome e senha) do remetente
$host = '';
$username = '';
$password = '';
$port = '';
$secure = '';

$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = $username;
$mail->Password = $password;
$mail->Port = $port;
$mail->SMTPSecure = $secure;

//relacionamento das variaveis do remetente com os parâmetros do PHPMailer
$mail->From = $from;
$mail->FromName = $fromName;
$mail->addReplyTo($from, $fromName);

//Definição do email e nome do destinatário
$mail->addAddress('lucasgdutra@gmail.com', 'Lucas Gabriel');

//Configurações de Tipografia
$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

//Conteudo do email
$mail->Subject = 'Enviando e-mails com PHPMailer';
$mail->Body = '<h1>olá<h1>';
$mail->AltBody = 'olá';

//Resultado do email
$send = $mail->send();
if($send){
    echo 'E-mail enviado';
} else {
    echo 'Erro: '.$mail->ErrorInfo;
}