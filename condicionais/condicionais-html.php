<?php

$valor = 52;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Inclemento no html -->

    <?php  if ($valor == 10 ): ?>
        <p>O VALOR É IGUAL A 10</p>
    <?php  else : ?>
        <p>O VALOR É DIFERENTE DE 10</p>
    <?php  endif; ?>

    <!-- com elseif -->

    <?php  if ($valor > 100 ): ?>
        <p>O VALOR É MAIOR QUE 100</p>
    <?php  elseif ($valor > 50) : ?>
        <p>O VALOR É MAIOR DE 50</p>
    <?php  else: ?>
        <p>O VALOR É DIFERENTE DE TODAS AS OUTRAS CONIÇÕES</p>
    <?php  endif; ?>

</body>
</html>