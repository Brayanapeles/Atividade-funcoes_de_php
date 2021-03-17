<?php
    function exclusaoDeValores(array $numeros, $valor){

        for($i=0 ;$i<= count($numeros); $i++){
            if($numeros[$i] == $valor){ 
                unset($numeros[$i]);
                return $numeros;
            }
        }
        return false;
    }

    $inteiros = [0, 50, 10, 25, 90, 70, 148, 280, 7411];

    print_r (exclusaoDeValores($inteiros, 50));