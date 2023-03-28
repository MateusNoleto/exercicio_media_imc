<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $peso = $_GET["peso"];
    $altura = str_replace(",", ".", "$_GET[altura]");


    $imc = $peso / ($altura * $altura);


    if ($imc < 17) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Muito abaixo do peso";
    } elseif ($imc >= 17 && $imc <= 18.49) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc <= 24.99) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Peso normal";
    } elseif ($imc >= 25 && $imc <= 29.99) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: acima do peso";
    } elseif ($imc >= 30 && $imc <= 34.99) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Obesidade 1";
    } elseif ($imc >= 35 && $imc <= 39.99) {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Obesidade 2";
    } else {
        echo "Valor do imc: " . $imc . "<br>" . "Situação: Obesidade 3";
    }

    ?>

</body>

</html>