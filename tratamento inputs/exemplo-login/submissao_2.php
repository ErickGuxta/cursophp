<?php

// Se não houve uma submissão de formulário, dá acesso inválido
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// users (simulação de informação em base de dados) com senha criptografada
$usuarios = [
    // aaa
    'erick' => '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S',
    // bbb
    'ana' => '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS',
    // ccc
    'carlos' => '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O'
];

// vai buscar o username e a password

$usuario=  isset($_POST['nome_usuario']) ? trim($_POST['nome_usuario']) : '';
$senha=  isset($_POST['senha_usuario']) ? trim($_POST['senha_usuario']) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Result</title>
</head>

<body>

    <?php if (key_exists($usuario, $usuarios)) : ?>

        <?php if(password_verify($senha, $usuarios[$usuario])):?>
            <h1>LOGIN OK!!!</h1>
        <?php else: ?>
            <h1>LOGIN INVÁLIDO</h1>
        <?php endif; ?>

    <?php else : ?>
        <h1>LOGIN INVÁLIDO</h1>
    <?php endif; ?>

    <a href="index.php">Voltar</a>

</body>

</html>