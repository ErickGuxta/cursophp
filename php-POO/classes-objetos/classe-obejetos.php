<?php

// Como criar uma classe:
class Fruto {
    public $nome;
}

// Como criar um objeto
$laranja = new Fruto();
// define o valor da propriedade
$laranja->nome = "Laranja";

// apresentar as propriedades
echo "Nome do fruto: " . $laranja->nome;
echo PHP_EOL;


// -----PROPRIEDADES E MÉTODOS
/*
Propriedades -> variáveis da classe
Métodos -> funções da classe

A plavra $this refere-se ao objeto atual e só está disponível dentro dos métodos (funções ou classes)
*/

class Animal{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar_animal(){
        return "O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso} kilogramas";
    }
}

$cachorro = new Animal();

$cachorro->nome = 'spike';
$cachorro->cor = 'preto';
$cachorro->peso = '20';

echo $cachorro->apresentar_animal();