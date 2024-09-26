<?php 
    $para = "otaviogabriel.alves.barbosa@gmail.com";
    $assunto = "Teste";
    $corpo = "Este e um teste de email";
    $headers = "From:otaviogabriel.alves.barbosa@gmail.com";

    if(mail($para, $assunto, $corpo, $headers)) {
        print("Email enviado com sucesso");
    } else {
        print("Falha ao enviar email");
    }
?>