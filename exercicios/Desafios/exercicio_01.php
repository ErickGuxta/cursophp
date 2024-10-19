<!-- Esta função deve testar se o é um fator de .factorbase

Retorne se for um fator ou se não for.truefalse

Sobre fatores
Fatores são números que você pode multiplicar para obter outro número.

2 e 3 são fatores de 6 porque: 2 * 3 = 6

    Você pode encontrar um fator dividindo números. Se o resto for 0, o número é um fator.
    Você pode usar o operador mod () na maioria dos idiomas para verificar se há um resto%
    Por exemplo, 2 não é um fator de 7 porque: 7 % 2 = 1

Nota: é um número não negativo, é um número positivo.basefactor -->

<?php

$base = 12;
$fator = 6;

function checkForFactor($base, $factor) {
    if ($base / $factor == 0) {
        return true;
    } else{
        return false;
    }
  }

