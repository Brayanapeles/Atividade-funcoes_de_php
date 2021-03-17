<?php
$listaDeCidades = [
    1 => "Jandira",
    2 => "Itapevi",
    3 => "Barueri",
    4 => "Osasco",
    5 => "Cotia",
    6 => "Santana de Parnaíba",
    7 => "Carapicuiba",
    8 => "São Paulo"
];

// $cidade = $_POST[$c];

$nomeDoCliente = $_POST['nomeCliente'];

$cidadeSelecionada = $_POST["selecaoDeCidades"];

echo "Olá " . $nomeDoCliente . "," . "de " . $listaDeCidades[$cidadeSelecionada]. "," . " seja bem-vindo.";