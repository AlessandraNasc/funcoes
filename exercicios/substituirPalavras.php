<?php

function substituiPalavras(string $frase){
    $vogais = ['a','e','i','o','u'];
    //substitui as letras
    return str_replace($vogais, '?', $frase);
}

echo substituiPalavras('hoje o dia esta lindo');