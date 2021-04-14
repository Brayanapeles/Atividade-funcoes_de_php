<?php


$comprar = [
    "banana" => 1, 
    5 => 2, 
    "uva" => 3, 
    3 => 4, 
    "maça" => 5, 
    6 => 6, 
    "melão" => 7, 
    15 => 8
];

function retornaChaves(array $vetor){ 
    foreach($vetor as $keys => $i){
        $novoVetor []= $keys;
    }
    return $novoVetor;
}

print_r( retornaChaves($comprar));
