<html>
<head>
    <title>Meu terceiro projeto</title>
    </head>

    <body>
        <?php
        $numero = 7;
        

        /*O função for é um laço de reprtição, $i = Variável de incremento (convenção),
        primeiro atributo é a  declaração do inicio do laço,
        segundo atributo determina quantas vezes vai repetir e o 
        terceiro atributo é o incremento*/

        for ($i= 1; $i <= 10; $i++) {
            echo("<h1>" . $numero . " X " . $i . " = " . $numero*$i . "</h1>");
        }
    
        ?>
    </body>
</html>