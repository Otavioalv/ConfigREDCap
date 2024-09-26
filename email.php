<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $to = 'root@localhost.com';
    $subject = 'Teste de Email';
    $message = 'Este é um teste de envio de email usando PHP.';
    $headers = 'From: root@localhost.com' . "\r\n" .
            'Reply-To: root@localhost.com';

    if(mail($to, $subject, $message, $headers)) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Falha ao enviar email.';
        error_log("Desgraçaa", 0);
    }
?>