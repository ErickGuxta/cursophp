<?php 

// 1. Declaração de variáveis
$a = 10; // Atribuindo o valor 10 à variável $a
$b = 20; // Atribuindo o valor 20 à variável $b

// 2. Estruturas de controle: Condicional
if($a > $b){
    // Se $a for maior que $b
    echo "a é maior que b"; // Exibe mensagem
} elseif ($a == $b) {
    // Se $a for igual a $b
    echo "a é igual b"; // Exibe mensagem
} else{
    // Se nenhuma das condições anteriores for verdadeira
    echo "a é menor que b"; // Exibe mensagem
}

// 3. Laços de repetição: For
echo "<br>Contagem de 1 a 5:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>"; // Exibe os números de 1 a 5
}

?>
