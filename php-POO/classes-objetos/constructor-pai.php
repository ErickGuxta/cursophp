<?php

// Como fazer para chmar o método __construct do pai sem sobrepor

class Humano
{
    public $nome;
    public $perfil;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}


class Funcionario extends Humano
{
    public function __construct($n)
    {
        parent::__construct($n);
        $this->perfil = "adiministrador";
    }
}

$funcionario = new Funcionario('joao');
echo $funcionario->nome;
echo '\n';
echo $funcionario->perfil;