
<?php
    function procurarNome(array $nomes, $nomeDeBusca){
        foreach($nomes as $nome){
            if($nome == $nomeDeBusca){
                return true;
            }
        }
        return false;
    }

    $pessoas = ["Fulano", "Ciclano", "Beltrano", "Patimba"];

    $pessoaEspecifica = ["Patimba"];

    var_dump($pessoas);

    echo "<br/><br/>";

    var_dump($pessoaEspecifica);

    echo "<br/><br/>";

    echo procurarNome($pessoas, "Patimba");

