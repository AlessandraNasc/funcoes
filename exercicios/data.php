<?php

setlocale(LC_ALL, 'ptb');//seta o idioma para a saída dos dados

function diaDaSemana($mes)
{
    echo strftime('%A', strtotime($mes)); //conversão da data para nome do dia da semana

}
$d = ('2022-12-14'); // entrada de dados com a data
diaDaSemana($d);