<?php

    // STRINGS
    // ------------------------------------------------------------------

    // Um aspeto importante nas strings: o PHP contém um vasto conjunto de
    // funções para efetuar operações com strings.
    // Vejamos apenas alguns exemplos.

    $email = "gustavocostacnn@gmail.com";

    // apresentar número de caracteres de uma string
    echo strlen($email) . '<br>';

    // transformar todas as letras em maiúsculas
    echo strtoupper($email) . '<br>';

    // apresentar apenas parte da frase
    echo substr($email, 0, 12) . '<br>';

    //verifica se uma palavra existe dentro da string

    if (str_contains($email, '@gmail.com')) { 
        echo "true";
    } else {
        echo "false";
    }

    // Existem várias dezenas de funções para strings.
    // Não te preocupes, ao longo do módulo iremos aprender bastantes
    // à medida das necessidades.