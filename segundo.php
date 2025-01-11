<html>
<head>
    <title>Meu Segundo projeto</title>
    </head>

    <body>
        <?php
            $numero1 = 5;
            $numero2 = 4 ;
            $resultado1 = $numero1+$numero2;
            $resultado2 = $numero1-$numero2;
            $resultado3 = $numero1*$numero2;
            $resultado4 = $numero1/$numero2;

            echo("<h1> O soma é: ". $resultado1 . "</h1>");
            echo("<h1> O Subtração é: ". $resultado2 . "</h1>");
            echo("<h1> O Multiplicação é: ". $resultado3 . "</h1>");
            echo("<h1> O Divisão é: ". $resultado4 . "</h1>");
            echo("<h1> " . $numero1 . $numero2 . "</h1>");
        ?>
    </body>
</html>