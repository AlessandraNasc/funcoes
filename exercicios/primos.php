<?php
$array = [];
function primos($numero){
    if(($numero % 1) == 0 ){
        echo 'é primo';
    }else{
        echo 'Não é primo';
    }
}


primos(4);
