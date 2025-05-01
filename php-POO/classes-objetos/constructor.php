<?php

/* o método especial __construct vai ser executado 
automaticamente sompre que um novo objeto é criado a partir dessa classe
*/

class Mulher{
    private $nome;
    private $apelido;

    function __construct($nome, $apelido){
        $this->nome = $nome;
        $this->apelido = $apelido;
    }

    function get_nome(){
        return $this->nome;
    }
    function get_apelido(){
        return $this->apelido;
    }
}

$a = new Mulher('Cinthia', 'Cindi');
echo $a->get_nome();
echo PHP_EOL;
echo $a->get_apelido();
