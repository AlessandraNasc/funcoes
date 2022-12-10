<?php

// caso o valor seja alterado dentro da função fora dela o valor continua o mesmo atribuido inicialmente.
//No exemplo abaixo a saida seria a seguinte:
//4 + 5 + 3 = 20
//Apesar da soma ter sido executada com os novos valores dentro da função , fora dela n1,2 e 3 continua com o valor inicial.
function soma(int $valor1, int $valor2, int $valor3)
{
    $valor1 = 5;
    $valor2 = 6;
    $valor3 = 9;
    $total = $valor1 + $valor2 + $valor3;
    return $total;
}

$n1 = 4;
$n2 = 5;
$n3 = 3;

echo $n1.' + '.$n2.' + '.$n3. ' = '.soma($n1,$n2,$n3);