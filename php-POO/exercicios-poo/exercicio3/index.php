<?php

require_once('classes.php');

$veiculos = [];

// carregar dados de um csv
$arquivo = fopen('dados.csv', 'r');
while (!feof($arquivo)) {  //enquanto não existir o final do ficheiro
    $linha = fgetcsv($arquivo); //vai pegar cada linha do ficheiro

    switch ($linha[0]) { 
        case 'automovel':
            $veiculos[] = new Automovel($linha);
            break;
        case 'aviao':
            $veiculos[] = new Aviao($linha);
            break;
        case 'barco':
            $veiculos[] = new Barco($linha);
            break;

        default:
            break;
    }
}

fclose($file);


// Apresentando dados
foreach ($veiculos as $veiculo) {
    if ($veiculo->get_tipo() == 'automovel') {
        echo $veiculo->apresentar();
        echo PHP_EOL;
    }
}
foreach ($veiculos as $veiculo) {
    if ($veiculo->get_tipo() == 'aviao') {
        echo $veiculo->apresentar();
        echo PHP_EOL;
    }
}
foreach ($veiculos as $veiculo) {
    if ($veiculo->get_tipo() == 'barco') {
        echo $veiculo->apresentar();
        echo PHP_EOL;
    }
}
