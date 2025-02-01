<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da média</title>
</head>

<body>
    <?php
    /*Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, 
    calcule sua média na variável media e exiba para o usuário o resultado*/
    $val1 = 60;
    $val2 = 80;
    $val3 = 60;

    $media = ($val1 + $val2 + $val3) / 3;

    echo "A média dos três números é: " . $media . " metros";
    echo "<br>";

    if($media <= 10) {
        echo ("Encaminhe o laudo para o supervisor.");
    }elseif($media > 10 && $media < 50) {
        echo ("Medida deve ser analisada pelos especialistas responsáveis.");
    }elseif($media >= 50 && $media <= 70) {
        echo ("Aprovado pelos especialistas.");
    }else {
        echo ("Revise o projeto.");
    }

    ?>
</body>

</html>