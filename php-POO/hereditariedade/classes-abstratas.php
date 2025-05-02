<?php

// Em uma classe abstrata, quando uma classe filha é herdade de uma classe abstracta, temos as seguintes regras:
//  >O metodo da classe filha deve ser definido com o mesmo nome
//  >O metodo da classe fila deve ser definido com o mesmo access modifier ou outro menos restrito
//  >O numero de argumentos necessários deve ser o mesmo (pode ter argumentos opcionais ou adicionais)

abstract class Pessoa
{
    abstract public function falar($mensagem);
}

class Cliente extends Pessoa
{
    // Obrigatoriamente eu tenho que completar a função
    // logo:
    public function falar($mensagem, $autor= null)
    {
        echo "$mensagem - $autor";
    }
}

// $cliente = new Cliente();
// $cliente->falar('mensagem de texto', 'carlos');