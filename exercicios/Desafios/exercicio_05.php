<?php


function strCount($str, $letter) {
    $ocorrencias = 0; 
    for ($i=0; $i < strlen($str); $i++) { 
        if ($letter == $str[$i]) { 
            $ocorrencias ++; 
        }
    }
    return $ocorrencias; 
}

echo strCount('Hellooo', 'o');

?>