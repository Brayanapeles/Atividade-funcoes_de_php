<?php

    function somarInteiros(array $vetorInteiros){
        $soma = 0;

        foreach($vetorInteiros as $numero){
            $soma += $numero;
        }

        return $soma;
    }
    
    $inteiros = [5, 25, 125];

    echo var_dump($inteiros);

    echo "<br/><br/>";

    echo somarInteiros($inteiros);