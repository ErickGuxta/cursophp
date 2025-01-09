<?php
// Inicia a sessão para acessar os dados
session_start();

if (!isset($_SESSION['dados'])){
    $_SESSION = [];
}

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    // Sanitizar os inputs
    $nome = isset($_POST['nome']) ? htmlspecialchars(trim($_POST['nome'])) : '';
    $sobrenome = isset($_POST['sobrenome']) ? htmlspecialchars(trim($_POST['sobrenome'])) : '';

    // Validar se os campos não estão vazios após a sanitização
    if(!empty($nome) && !empty($sobrenome)){
        $_SESSION['dados'][] = [
            'nome' => $nome,
            'sobrenome' => $sobrenome
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Dados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Dados Enviados</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($_SESSION['dados'])): ?>
                <?php foreach ($_SESSION['dados'] as $dado): ?>
                    <tr>
                        <td><?= $dado['nome']; ?></td>
                        <td><?= $dado['sobrenome']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Nenhum dado enviado ainda.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="formulario.php">Voltar ao formulário</a>
    
    <!-- Adicionando o botão para limpar os dados -->
    <form method="POST">
        <button type="submit" name="limpar">Limpar Dados</button>
    </form>

    <?php
    if (isset($_POST['limpar'])) {
        unset($_SESSION['dados']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>
</html>
