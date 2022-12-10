<?php

// Função Anônima é uma função em que não é definido nome para a mesma
$multiplicacao = function ($valor) {
    return $valor * 0.1;
};


//Pode-se também atribuir a função anônima para outra variável
$exemplo = $multiplicacao;

echo $exemplo (12);