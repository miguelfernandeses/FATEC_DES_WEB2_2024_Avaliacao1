<?php
session_start();
// Verifica se o usuário está logado. Se não, redireciona para a página de login.
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("location: login.php");
    exit;
}

// Define o caminho do arquivo de texto a ser lido.
$filename = 'Moto.txt';

// Verifica se o arquivo existe antes de tentar abri-lo.
if(file_exists($filename)){
    // Lê o arquivo e armazena seu conteúdo em uma variável.
    $registros = file($filename);
    
    // Exibe cada registro em uma nova linha na página web.
    foreach($registros as $registro){
        echo nl2br(htmlspecialchars($registro));
    }
} else {
    echo "Nenhum registro encontrado.";
}
?>