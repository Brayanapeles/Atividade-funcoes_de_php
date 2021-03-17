<?php
    function trocaDePosicaoArray(array $ordemDosNomes){
        $i = [];
        $step = count($i);
        $a = count($ordemDosNomes) - 1;
        for($a; $step <= $a; $a--){
                echo $ordemDosNomes[$a] . "<br/><br/>";
        }
    }

    $nomes = ["Fulano", "Ciclano", "Beltrano"];

    var_dump($nomes);

    echo "<br/><br/>";

    echo trocaDePosicaoArray($nomes);

    echo "<br/><br/>";
