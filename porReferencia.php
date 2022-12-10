<?php

//Quando passado por referencia é passado a váriavel em si e não o seu valor.
//Isso significa que total é válido dentro da função como fora da mesma.
function soma(int $valor1, int $valor2, &$total)
{
    $total = $valor1 + $valor2;
}

$n1 = 4;
$n2 = 6;
$soma = 0;

soma($n1, $n2, $soma);

echo $n1.' + '.$n2.' = '.$soma;