<?php

function soma(float  $num1, float  $num2,  float $num3)  {
    return $num1 + $num2 + $num3;
}

function media($num1,$num2,$num3){
    $somatoria = soma($num1, $num2, $num3);
    $div = ($somatoria)/3;
    //formatação de casas decimais
    return number_format($div, 1, '.', '');
}

echo media(3.5, 10, 10);
