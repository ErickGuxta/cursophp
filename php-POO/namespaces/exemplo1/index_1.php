<?php

/* Permite resolver dois ploblemas:
    -organizar melhor as classes permitindo agrupa-las num espaço
    -permite que exista dentro do mesmo projeto classes com o mesmo nome

    Usamos em projetos de média e larga escala, é uma forma de manter o código mais bem organizado
*/ 
//a expressão NAMESPACE deve ser sempre a primeira declaração no topo do script
namespace classes_principais; 

class Matematica{
    public function adicionar($a, $b){
        return $a + $b;
    }
    public function subtrair($a, $b){
        return $a - $b;
    }
}