<?php


$numeros = [10234, 34217890745,2344223, 412340, 5032144];

function maiorMenor(array $vetor){
    $maior = $vetor[0];
    $menor = $vetor[0];

    foreach ($vetor as $valor) {
        if($maior > $valor){
            $maior = $maior; 
        }else{
            $maior = $valor;
        }
        if($menor < $valor){
            $menor = $menor; 
        }else{
            $menor = $valor;
        }
    }

    $novoVetor [] = $maior;
    $novoVetor [] = $menor;
 
    return $novoVetor;
}

print_r(maiorMenor($numeros));
