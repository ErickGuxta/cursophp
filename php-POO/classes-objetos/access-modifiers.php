<?php

// Tipos de access mofiers:
// public
// private
// protected
class Homem{

    // propriedade privada. O seu acesso não é possível sem ser dentro da classe
    private $nome;

    function set_nome($n){
         
        $nomes_proibidos = ['erick', 'gustavo', 'cinthia'];

        // verifica se $n pertence aos nomes proibidos
        if (in_array($n, $nomes_proibidos)) {
            return;
        } else $this->nome = $n; // se não pertence, define $nome com o valor de $n. 
       
    }

    function get_nome(){
        return $this->nome;
    }
}

$h = new Homem();

// isso só é possível se for PUBLIC
    // $h->nome = 'kaique';
    // echo $h->nome;
    // echo PHP_EOL;

$h->set_nome('erick');
echo 'O nome é: ' . $h->get_nome();  //vai retornar vazio por que  erick é um nome proibido
echo PHP_EOL;

$h->set_nome('lucas');
echo 'O nome é: ' . $h->get_nome();  //vai retornar lucas por que  lucas não é um nome proibido
echo PHP_EOL;