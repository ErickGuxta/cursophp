<!-- Escreva uma função que calcule a média dos números em uma determinada lista.

Nota: Matrizes vazias devem retornar 0. -->

<?php

// ENTRADA DO USUARIO
$array = [ ];


function encontrar($array): float {


    if (empty($array)) {
        return 0;
    }

    $soma = 0;
    $quant = 0;

    for ($i=0;  $i < count($array) ; $i++) { 
        $quant++; 
        $soma += $array[$i]; 
    }


    return $soma / $quant;
    
}

$media = encontrar($array);
echo 'A média dos números é: ' . $media;

