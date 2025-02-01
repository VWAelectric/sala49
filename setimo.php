<!-- switchcase.php -->
<html>
<head>
   <title>Meu segundo programa</title>
</head>
<body>
<?php
$dia_da_semana = "quarta";
switch ($dia_da_semana) {
  case "segunda":
     echo "Hoje é segunda-feira!";
     break;
 case "terça":
     echo "Hoje é terça-feira!";
     break;
 case "quarta":
     echo "Hoje é quarta-feira!";
    break;
 case "quinta":
    echo "Hoje é quinta-feira!";
    break;
 case "sexta":
    echo "Hoje é sexta-feira!";
    break;
 case "sábado":
    echo "Hoje é sábado!";
    break;
 case "domingo":
    echo "Hoje é domingo!";
    break;
 default:
   echo "Dia inválido!";
}
?>
</body>
</html>
