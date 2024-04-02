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
    <title>Cadastro</title>
</head>

<body>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir seus dados</p>
        <form action="cadastroC.php" method="post">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="nome" class="form-control" required>
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Registro Academico(RA)</label>
                <input type="text" name="RA" class="form-control" required>
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <label>Placa do Carro</label>
                <input type="text" name="placa" class="form-control" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    
</body>
</html>
