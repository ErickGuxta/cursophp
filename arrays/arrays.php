<?php
// 6. Arrays
$vetor = ["valor1", "valor2", "valor3"];

$vetor =[
    "adm1" => "valor1",
    "adm2" => "valor2",
    "adm3" => "valor3",

];

echo '<pre>';
print_r($vetor);
echo '<pre>';

$cidades = [
    'sao-paulo' => [
        'email' => 'erickgustavocosta@gmail.com',
        'senha' => '******',
    ],
    'rio-de-janeiro' => [
        'email' => 'gustavocostacnn@gmail.com',
        'senha' => '******',
    ],
];



echo '<pre>';
print_r($cidades);
echo '<pre>';

echo 'o email é: ' . $cidades[ 'rio-de-janeiro']['email'] . '<br>' ; 
echo 'a senha é: ' . $cidades[ 'rio-de-janeiro']['senha'] . '<br>';

?>