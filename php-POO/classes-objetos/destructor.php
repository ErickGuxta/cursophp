<?php

/*
Tal como acontece com o __construct, existe um método 
especial que só vai ser executado quando um objeto é 
destruído ou o script termina a sua execução

__destruct() - Chamado quando um objeto é destruído, 
explicitamente com ou quando o script termina a execução unset()
*/

class Cliente{
    private $nome;

    function __construct($nome){
        $this->nome = $nome;
        echo 'Foi criado um novo objeto com o nome: ' . $this->nome . PHP_EOL;
    }
    function __destruct(){
        echo 'O objeto foi distruído. Tinha o seguinte nome: ' . $this->nome . PHP_EOL;
    }
}

$cliente = new Cliente('João');

// um código qualquer aqui só para entender o fluxo de código
echo "ola mundo";
echo PHP_EOL;

// Destruindo deliberadamente o objeto usando unset
unset($cliente);

