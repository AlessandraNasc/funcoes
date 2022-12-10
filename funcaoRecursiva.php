<?php

//Função Recursiva é quando executamos ela mesma.
function divisao($numero)
{
    $result = $numero / 2;

    echo $result.'<br>';
    
    //round é uma função do PHP que arredonda um número
    (round($result) > 0) ? divisao($result) : null;
}

echo divisao(120);