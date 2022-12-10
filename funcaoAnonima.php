<?php

// Função Anônima é uma função em que não é definido nome para a mesma
$multiplicacao = function (float $valor) {
    return $valor * 0.1;
};

echo $multiplicacao (90);