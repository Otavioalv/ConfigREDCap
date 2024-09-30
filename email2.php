<?php

use PHPMailer\PHPMailer\PHPMailer;

include("includes/config.php");
include("vendor/autoload.php");

$mail = new PHPMailer(true);

try {

    // Configurações SMTP local
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->Port = SMTP_PORT;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = false;

    // Configurações do email
    $mail->setFrom('admin@localdomain.com');
    $mail->addAddress('admin@localdomain.com');
    $mail->Subject = "Assunto email";
    $mail->Body = "Bolsonaro Reeleito fazueli ksk";

    // Enviar email
    $mail->send();

    print("Email enviado com sucesso");
} catch(Exception $e){
    print("Erro ao enviar email: ");
}
