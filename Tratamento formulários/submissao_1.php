<?php 
//ESSE SCRIPT VAI TRATAR A SUBSSÃO  DO FORMULÁRIO

//Se não houver uma submissão de formulário, da acesso inválido

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

?>