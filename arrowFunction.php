<?php

//FUNÇÃO ANÔNIMA
/*$multiplicacao = function($valor) {
    return $valor * 0.1;
}*/

//SIMPLIFICANDO A FUNÇÃO ANÔNIMA COM ARROW FUNCTION
//Função válida a partir do PHP 7.4
//Só pode ser usada quando temos somente um retorno
$multiplicacao = fn($valor) => $valor * 0.1;

echo $multiplicacao(120);