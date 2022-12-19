<?php

function maiorNumero (int $num1,int $num2, int $num3){
    return 'Maior número entre '.$num1.','. $num2.','. $num3. ' é: ' .max($num1, $num2, $num3).'<br>';
}

function menorNumero (int $num1,int $num2, int $num3){
    return 'Menor número entre '.$num1.','. $num2.','.$num3. ' é: ' .min($num1, $num2, $num3);
}


echo maiorNumero(200, 19, 4);
echo menorNumero(200, 1, 4);