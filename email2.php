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
    $mail->Body = "Bolsonaro Reeleito fazueli";

    // Enviar email
    $mail->send();

    print("Email enviado com sucesso");
} catch(Exception $e){
    print("Erro ao enviar email: ");
}

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// $mail = new PHPMailer(true);

// try {
//     // Configurações do servidor SMTP local (hMailServer)
//     $mail->isSMTP();
//     $mail->Host = '127.0.0.1';  // Endereço do servidor SMTP local (localhost)
//     $mail->SMTPAuth = true;     // Habilitar autenticação SMTP
//     $mail->Username = 'admin@localdomain.com';  // Usuário SMTP (o seu e-mail)
//     $mail->Password = 'sua_senha';              // Senha do usuário SMTP
//     $mail->SMTPSecure = false;  // Como o hMailServer está local, desabilitar SSL/TLS
//     $mail->Port = 25;           // Porta SMTP, 25 para servidores locais sem SSL/TLS
    
//     // Configurações do e-mail
//     $mail->setFrom('admin@localdomain.com', 'Administrador');  // Remetente
//     $mail->addAddress('destinatario@dominio.com');  // Adicionar destinatário
//     $mail->Subject = 'Assunto do Email';  // Assunto do e-mail
//     $mail->Body = 'Este é o corpo do e-mail';  // Corpo do e-mail

//     // Enviar e-mail
//     $mail->send();
//     echo 'Email enviado com sucesso';
// } catch (Exception $e) {
//     echo "Erro ao enviar email: {$mail->ErrorInfo}";
// }
