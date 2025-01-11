<html>
<head>
    <title>Meu primeiro projeto</title>
    </head>

    <body>
        <?php
        echo("<h1> Hello Sala 49 </h1>");
        echo("<h1>" . 7*7 . "</h1>");
        $primeiro_nome="João"; // Para que o php identifique uma variável temos que adicionar o sinal do "$" ao início.
        $segundo_nome="Silva";
        echo("<h1>". $primeiro_nome ." " . $segundo_nome . "</h1>"); /* O ponto serve para concatenar, importante dar os espaços entre os pontos,
        o h1 entre as aspas duplas faz com que o testo exibido na tela fique maior.*/
        ?>
    </body>
</html>