<?php

//Função Recursiva é quando executamos ela mesma.
/*function divisao($numero)
{
    $result = $numero / 2;

    echo $result.'<br>';
    
    //round é uma função do PHP que arredonda um número
    (round($result) > 0) ? divisao($result) : null;
}

echo divisao(120);*/


/*function somatoria($numero)
{
    echo ($numero == 1) ?  1 :  $numero + somatoria($numero - 1).'<br>';
}

somatoria(19);*/


function fibonachi($numero)
{
    echo ($numero == 1) ?  $numero :  fibonachi($numero - 1) + fibonachi($numero - 2).'<br>';
}

fibonachi(19);
