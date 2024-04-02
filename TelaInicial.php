<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Benvindo ao site.</h1>
    </div>
    <p>
         
    <a href="cadastroMoto.php" class="btn btn-primary">Registrar Moto</a>
        <br><br>

        <a href="cadastroCarro.php" class="btn btn-primary">Registrar Carro</a>
        <br><br>    

        <a href="visualizarMoto.php" class="btn btn-primary">Verificar Registros Moto</a>
        <br><br>

        <a href="visualizarCarro.php" class="btn btn-primary">Verificar Registros Carro</a>
        <br><br>

        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>