<html>
    <head>
        <title>Meu Sexto Projeto</title>
    </head>
    <body>
        <?php
        $numero = 7;
        // função while é laço de repetição
        // $i = Variável de incremento (Convenção)
        // inicialização da variável de controle
        $i = 1;
        // condição de repetição
        while ($i <= 10) {   
            echo($numero . " X " . $i . " = " . $numero*$i . "<br/>");
            // incremento da variável de controle
            $i = $i + 1;
        }
        ?>
    </body>
</html>