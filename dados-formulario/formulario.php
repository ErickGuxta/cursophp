
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação-Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
    <section>
        <form action="tabela.php" method="POST">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </section>

    <a href="tabela.php">Ver dados enviados</a>
</body>
</html>