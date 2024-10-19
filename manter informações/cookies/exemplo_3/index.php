<?php 

require_once 'meu_cookie.php';

if (!empty($_COOKIE["usuario"])) {
    echo "Olá, " . $_COOKIE["usuario"];
} else{
    echo "Bem vindo, visitante!";
    
}

?>

