<?php

$frutas = ['abacate','pera','ameixa','uva','manga','caju'];

echo 'lista de frutas<br>';

foreach ($frutas as $fruta) {
    echo "<ul><li>{$fruta}</li></ul>";
};

echo 'lista de bandas e músicas conhecidas<br>';

$bandas = [['radiohead','todas'],['keane','todas'],['coldplay','quase todas'],['muse','quase todas']];

foreach ($bandas as $banda) {

    echo "<ul>
        <li>{$banda[0]}
        <ul>
        <li>{$banda[1]}</li>
        </ul>
        </li></ul>";
    
};