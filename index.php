<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração REDCap</title>
</head>
<body>
    <h1>Versão</h1>
    <p>
        <strong>Versão PHP:</strong> v8.8.12</br>
        <strong>Versão MySQL:</strong> v8.0.36
    </p>


    <h1>Testando conexao com mysql</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
    
        $conn = mysqli_connect($servername, $username, $password);

        
        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
        echo "Conectado com sucesso ao MySQL!<br>";

        
        $sql = "SHOW DATABASES";
        $result = mysqli_query($conn, $sql);

        
        if ($result) {
            echo "Bancos de dados disponíveis:<br>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['Database'] . "<br>";
            }
        } else {
            echo "Erro ao executar o comando: " . mysqli_error($conn);
        }

        
        mysqli_close($conn);
    ?>


</body>
</html>