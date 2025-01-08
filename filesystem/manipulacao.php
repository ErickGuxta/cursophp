<?php

echo '<pre>';

//LISTAGEM DE FICHEIROS
    echo __DIR__ . '<br>'; //scandir escaneia minha pasta
    $file = scandir(__DIR__); //constante mágica __DIR__
    print_r($file);

/*
    O . e o .. estão sempre presentes em cada pasta.
    São identificados como a pasta atual (.) e a pasta anterior (..)
*/

    $file2 = scandir('./'); //lista a pasta atual
    print_r($file2);


    $file3  = scandir('../'); //lista a pasta anterior (mãe)
    print_r($file3);

echo '<hr>';


//SE UM FICHEIRO OU PASTA EXISTE

    echo 'Aqui há um laço foreach para verificar se é um ficheiro ou uma pasta';
    echo '<hr>';


    $files = scandir(__DIR__);
    print_r($files);
    echo '<hr>';

    foreach ($files as $item) {
        echo is_file($item) ? 'Ficheiro' : 'Pasta';
        echo '<hr>';

    }


    //se eu quiser listar apenas os ficheiros (arquivos):

    foreach($files as $item){
        if (is_file($item)){
            echo $item . '<br>';
        }
    }



//REMOVER E CRIAR PASTAS

    mkdir(__DIR__ . '/pasta_criada'); //para criar pasta

    //Verificar se o ficheiro ou pasta existe:

        if (!file_exists(__DIR__ . '/pasta_criada')){
            mkdir(__DIR__ . '/pasta_criada');
        }

    
    rmdir(__DIR__ . '/pasta_criada'); //para remover pasta
    
    //Verificar se o ficheiro ou pasta existe:

        if(file_exists(__DIR__ . 'pasta_criada')){
            rmdir(__DIR__ . '/pasta_criada');
        }


    mkdir(__DIR__ . '/pasta_teste/outra_pasta', recursive: true) //Se true, cria todos os diretórios intermediários que não existem.
?>