<?php

// métodos estáticos são métodos que pertencem à classe e não a uma instância da classe. Isso significa que você pode chamá-los sem criar um objeto da classe.

class MinhaClasse{
    public static function metodoEstativo(){
        echo "Esse é um método estático";
    }
}

// Aqui eu nao preciso instancias, basta itilizar ::
MinhaClasse::metodoEstativo();

// Três palavras-chave especiais, self, parent e static, são utilizadas para acessar propriedades e métodos de dentro de uma definição de classe.

class MyClass{
    const CONST_VALUE = "um valor constante";
}

class OtherClass extends MyClass{
    public static $my_estic = "variável estática";

    public static function doubleColon(){
        echo parent::CONST_VALUE . "\n"; //fora do escopo da classe OtherClass
        echo self::$my_estic . "\n"; //dentro do escopo da classe OtherClass
    }
}


echo OtherClass::doubleColon();