<!-- notas.php -->
<html>
<head>
 <title>Meu quinto projeto</title>
</head>
<body>
    <?php
     echo("<h1>Resultado</h1>");
     echo("<br/>");
     $nota = 6.5;
     if ($nota < 5) {
       echo("Aluno reprovado");
     } elseif 
       ($nota < 7) {
     echo("Aluno em recuperação");
    } else {
     echo("Aluno aprovado");
    }
 ?>
</body>
</html>