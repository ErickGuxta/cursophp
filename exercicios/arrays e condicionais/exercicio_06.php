<?php

    /*
      Vamos simular uma mensagem de erro.
      Se a variável erro tiver conteúdo dentro dela, deverá ser
      apresentada a mensagem de erro.
      Caso contrário, se a mensagem de erro estiver vazia, deverá 
      aparecer a mensagem 'SUCESSO'.
    */

    $mensagem_erro = 'FDF';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
        .erro {
            color: white;
            background-color: darkred;
        }
    </style>
</head>
<body>

    <?php if( $mensagem_erro == ''):?>
        <p class="sucesso"><?= 'SUCESSO'?></p>
    <?php else:?>
        <p class="erro"><?= 'ERRO' ?></p>
    <?php endif;?>

</body>
</html>