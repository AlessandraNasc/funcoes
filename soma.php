<?php

//para definir uma váriavel como opcional basta setar um valor padrão como é o caso do $n3
function soma(int $n1, int $n2, int $n3 = 0)
{
    return $n1 + $n2 + $n3;
}


echo 'Total: '.soma(3, 8, 3); 