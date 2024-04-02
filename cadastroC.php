<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com Sucesso</title>
</head>
<body>
    <?php
    
    $filename = "Carro.txt";
    if(!file_exists("Carro.txt")){
        $handle = fopen("Carro.txt", "w");
    } else {
        $handle = fopen("Carro.txt", "a");
    }

    fwrite($handle, $_POST['nome'] . "|" . $_POST['RA'] . "|" . $_POST['placa'] . "\n");
    fclose($handle);

    echo "Cadastrado com sucesso!";
    
    ?>
    <br><br>
    <a href="TelaInicial.php">Voltar</a>
</body>
</html>