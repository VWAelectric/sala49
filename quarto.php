<html>
    <head>
        <title>Meu quarto Projeto</title>
    </head>
    <body>
        <?php
           //imc = peso / (altura * altura)
           $imc = 0;
           $peso = 93;
           $altura = 1.73;
           $imc = $peso / ($altura*$altura);
           echo("Seu IMC = " . $imc);
           echo("<br/>");
           if ($imc < 18.5) {
            echo("Magreza");
           }
           if ($imc > 18.5 and $imc <= 24.9) {
            echo("Normal");
           }
           if ($imc > 25 and $imc <= 29.9) {
            echo("Sobrepeso");
           } 
           if ($imc > 30 and $imc <= 34.9) {
            echo("Obesidade Grau I");
           }  
           if ($imc > 35 and $imc <= 39.9) {
            echo("Obesidade Grau II");
           }   
           if ($imc > 40) {
            echo("Obesidade Grau III");
           }  
           // if significa "SE". Use parentesis no IF
           // e chaves para executar o processo.                                        
        ?>
    </body>
</html>