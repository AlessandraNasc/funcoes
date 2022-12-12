<?php
function fibonachi($numero)
{
    echo ($numero == 1 || $numero == 0) ?  $numero :  fibonachi($numero - 1) +  ($numero - 2).'<br>';
}

fibonachi(20);

