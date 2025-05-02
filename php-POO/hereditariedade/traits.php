<?php

trait movimentos
{
    function iniciar(){
        return 'iniciou o movimento';
    }
    
    function saltar(){
        return 'iniciou o salto';
    }

    function parar(){
        return 'parou o movimento';
    }
}

trait movimentos_de_voo
{
    function levantar(){
        return "levantou voo";
    }
    
    function voar(){
        return "voando";

    }

    function aterricar(){
        return "aterriçando";
    }
}

class SerVivo
{
    public $nome;
    public $especie;
    public $peso;
}

class Homem extends SerVivo
{
    use movimentos;
}

class Passaro extends SerVivo
{
    use movimentos, movimentos_de_voo;
}

$h = new Homem();
echo $h->iniciar();
echo PHP_EOL;


$p = new Passaro();
echo $p->aterricar();
echo $p->voar();
echo $p->saltar();
echo PHP_EOL;



