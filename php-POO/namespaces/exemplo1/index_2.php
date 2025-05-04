<?php

//1º: importar o script
require_once('index_1.php');

//2º: para podermos instancias a classe do script index_1.php, temos que ter atenção o seu namespace 

$matematica = new classes_principais\Matematica();
echo $matematica->adicionar(10,20); //30