<?php 
/*  file_get_contents()
        Função: Lê o conteúdo de um arquivo em uma string.
        Uso: Quando você deseja ler um arquivo.
*/

$dados = file_get_contents('pasta_teste/tabuada.txt');
echo nl2br($dados); // A função nl2br() no PHP é usada para converter quebras de linha (\n) em uma string para tags HTML de quebra de linha (<br>)


//LER UM ARQUIVO LINHA POR LINHA USANDO AS FUNÇÕES: fopen() ; fgets(); feof()

    //OBS: r - leitura  | w - escrita | a - adicionar

    echo '<hr>'; 

    $file = fopen('pasta_teste/file2.txt', 'r');
    while(!feof($file)){
        echo fgets($file) . '<br>';
    }
    fclose(($file));

    //Pode-se usar o fopen/ fclose para ler ou escrever 

        //Escrever num ficheiro:

        $arquivo = fopen('pasta_teste/file1.txt', 'w');
        for($i; $i <= 10; $i++){
            fputs($arquivo , (3 * $i) . PHP_EOL);
        }

        fclose($arquivo);
?>