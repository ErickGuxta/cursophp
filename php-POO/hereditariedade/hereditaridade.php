<?php

class AnimalEstimacao{
    protected $nome;
    protected $cor;
    protected $raca;

    function __construct($nome, $cor, $raca){
        $this->nome = $nome;
        $this->cor = $cor;
        $this->raca = $raca;
    }

    function comer(){
        echo "O animal {$this->nome} está comendo e ESTE METODO É DA CLASSE MÃE";
    }
}

class Cachorro extends AnimalEstimacao{
    function latir($vezes){
        echo "O {$this->nome} latiu $vezes vezes!";
    }

    function comer(){
        echo "O animal {$this->nome} está comendo e ESTE METODO É DA CLASSE FILHO";
    }
}

// Instanciação das classes em objetos
$cachorro = new Cachorro('Spike', 'Preto', 'Pitbull');
$cachorro2 = new Cachorro('Bolsonaro', 'Caramelo', 'Viralata');

// Não só cada objeto tem as propriedades da classe base,
// como também tem as funcionalidades que cada classe importa.

echo $cachorro->latir(5);
echo PHP_EOL;
echo $cachorro2->latir(10);
echo PHP_EOL;


// SOBREPOSIÇÃO DE MÉTODOS HERDADOS

// o médodo dentro da classe filha sobrepoeem do da mãe

echo $cachorro2->comer(); //O animal Tico está comendo e ESTE METODO É DA CLASSE FILHO
echo PHP_EOL;

$cachorro3 = new AnimalEstimacao('Tico', 'Preto', 'Pitbull');
echo $cachorro3->comer(); //O animal Tico está comendo e ESTE METODO É DA CLASSE MÃE

