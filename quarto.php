<html>
<head>
    <title>Meu quarto projeto</title>
    </head>

    <body>
        <?php
        //IMC = peso / (altura * altura)
        $imc = 0;
        $peso = 76;
        $altura = 1.70;

        $imc = $peso / ($altura*$altura);

        echo("Seu IMC = " . $imc);
        echo("<br/>");

        if($imc < 18.5) {
            echo("Magreza");
        }
        if($imc > 18.5 and $imc <= 24.9) {
            echo("Normal");
        }
        if($imc > 25 and $imc <= 29.9) {
            echo("Sobrepeso");
        }
        if($imc > 30 and $imc <= 34.9) {
            echo("Obesidade Grau I");
        }
        if($imc > 35 and $imc <= 39.9 ) {
            echo("Obesidade Grau II");
        }
        if($imc > 40 ) {
            echo("Obesidade Grau III");
        }

        ?>
    </body>
</html>