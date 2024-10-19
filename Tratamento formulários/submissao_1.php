<?php 
//ESSE SCRIPT VAI TRATAR A SUBSSÃO  DO FORMULÁRIO

//Se não houver uma submissão de formulário, da acesso inválido

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}


//vai buscar o nome do usuario e a senha


$usuario=  isset($_POST['nome_usuario']) ? $_POST['nome_usuario'] : '';
$senha=  isset($_POST['senha_usuario']) ? $_POST['senha_usuario'] : '';

    // posso fazer dessa maneira (é a mesma coisa):

        // if (isset($_POST['nome_usuario'])) {
        //     $usuario = $_POST['nome_usuario'];
        // } else{
        //     $usuario = '';
        // }

        // if (isset($_POST['senha_usuario'])) {
        //     $senha = $_POST['senha_usuario'];
        // } else{
        //     $senha = '';
        // }

//Verificar se o Login é valido
    //de forma bruta:
    $user = [
        "usuario" => "erick",
        "senha"  => "123"
    ];


    if ($usuario == $user['usuario'] && $senha ==  $user['senha']) {
        echo '<h1>LOGIN VÁLIDO</h1>';
    } else{
        echo '<h1>LOGIN INVÁLIDO</h1>';

    }

//link para voltar

echo '<a href="index.php">PÁGINA INICIAL</a>'


//OBSERVAÇÃO:  EXISTEM ASPECTOS NESSE SCRIPT QUE NÃO SÃO BOAS PRÁTICAS
?>