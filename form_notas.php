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
    $aluno = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];

    $media = ($nota1 + $nota2) / 2;

    if ($media < 4.0) {
        echo "Aluno: " . $aluno . "<br>" . "Nota final: " . $media . "<br>" . "Situação: Reprovado";
    } elseif ($media >= 4.0 && $media < 6.0) {
        echo "Aluno: " . $aluno . "<br>" . "Nota final: " . $media . "<br>" . "Situação: Exame final";
    } else {
        echo "Aluno: " . $aluno . "<br>" . "Nota final: " . $media . "<br>" . "Situação: Aprovado";
    }

    ?>

</body>

</html>