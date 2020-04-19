<?php
require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/PHPMailer.php");
require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/SMTP.php");
    $name 		= $_POST['name'];
    $email 		= $_POST['email'];
    $subject 	= $_POST['subject'];
    $message 		= $_POST['message'];
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "servidor.hostgator.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "contato@juleikapatricia.com.br";
 $mail->Password = "insira a senha aqui";
 $mail->SetFrom($email);
 $mail->Subject = $subject;
 $mail->Body = $message;
 $mail->AddAddress("destino@dominio.com.br");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
       echo "Mensagem enviada com sucesso";
    }
?>