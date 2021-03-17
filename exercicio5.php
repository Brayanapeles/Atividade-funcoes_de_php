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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles-global.css">
</head>
<body>
    <form action="Exercicio5_pt-2.php" method="POST">
        <div class="input-group">
            <label for="idNomeCliente">Informe seu nome:</label>
            <input type="text" required name="nomeCliente" id="idNomeCliente" placeholder="Fulano de Tal"/>
        </div>
        <div class="input-group">
            <label for="">Selecione sua cidade:</label>
            <select name="selecaoDeCidades" id="idSelecaoCidades" required>
                <?php
                    foreach ($listaDeCidades as $key => $cidade) {
                        # code...
                ?>
                    <option value="<?= $key ?>"><?= $cidade ?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <button>Enviar</button>
        <button type="reset" style="color: red;">LIMPAR</button>
    </form>
</body>
</html>