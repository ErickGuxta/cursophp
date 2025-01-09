<?php 

echo '<pre>';

//IFORMAÇÕES DO FICHEIRO

    $dados = filesize('pasta_teste/registros.txt'); //saber tamanho do arquivo
    echo $dados . 'bytes';

    echo '<hr>';


    $info = pathinfo('pasta_teste/registros.txt'); //obter varias informações do arquivo
    print_r($info);


//CRIAR E ESCREVER INFORMAÇÕES NUM ARQUIVO

    //USE file_put_contents()

    file_put_contents('pasta_teste/file1.txt' , 'texto do ficheiro');

    //para adicionar alguma informação:

        file_put_contents('pasta_teste/file2.txt', time() . PHP_EOL, FILE_APPEND); // criei nome do arquivo, falei qual é o conteúdo, adionei no arquivo
    
    //EXEMPLO PRÁTICO 

    file_put_contents('pasta_teste/tabuada.txt', ' ' );

    for ($i=1; $i<= 10; $i++){
        $resultado = "3 x $i = " . (3 * $i) . PHP_EOL;
        file_put_contents('pasta_teste/tabuada.txt', $resultado, FILE_APPEND);
    }
?>

