<?php

require_once('index_1.php');

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['F', 'Márcia Antunes'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinis'],
];


$humano = new Humanos();
foreach ($dados as $dado) {
    $humano-> definir($dado[0], $dado[1]);
}


// IMPRIMINDO OS NOMES 

foreach ($humano->get_femininos() as $nome) {
    echo $nome;
    echo PHP_EOL;
}
foreach ($humano->get_masculinos() as $nome) {
    echo $nome;
    echo PHP_EOL;
}
foreach ($humano->get_desconhecidos() as $nome) {
    echo $nome;
    echo PHP_EOL;
}