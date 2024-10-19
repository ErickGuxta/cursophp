<?php
// para iniciar a sessão:
session_start();

// variáveis na super globa $_SESSION
$nome =  !empty($_SESSION['nome']) ? $_SESSION['nome'] : '-';
    // OUTRA MANEIRA DE ESCREVER: 
    // if (!empty($_SESSION['nome'])) {
    //     $nome = $_SESSION['nome'];
    // }else {
    //     $nome = '-'
    // }
$apelido =  !empty($_SESSION['apelido']) ? $_SESSION['apelido'] : '-';
    // OUTRA MANEIRA DE ESCREVER: 
    // if (!empty($_SESSION['apelido'])) {
    //     $apelido = $_SESSION['apelido'];
    // }else {
    //     $apelido = '-'
    // }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

    <?php require_once 'nav.php' ?>
    <hr>
    <h2>Exercício com sessões de PHP</h2>
    
    <h3>Valor da variável 'nome':</h3>
    <h1><?= $nome ?></strong></h1>

    <h3>Valor da variável 'apelido':</h3> 
    <h1><?= $apelido ?></h1>

</body>
</html>