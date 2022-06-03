<?php

$mes = 12;

echo match ($mes) {
    1 => 'janeiro',
    2 => 'fevereiro',
    //[...]
    11 => 'novembro',
    12 => 'dezembro',
    default => 'mês inválido'
};