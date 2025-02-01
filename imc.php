<!DOCTYPE html>
<html>
<head>
    <title>imc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
    <form method="post">
        <label for="nome">Digite o nome</label>
        <input type="text" id="nome" name="nome" class="form-control"
        placeholder="Digite seu nome" required>
        <br/>
        <label for="peso">Digite o peso</label>
        <input type="text" id="peso" name="peso" class="form-control" 
        placeholder="Digite seu Peso" required>
        <br/>
        <label for="altura">Digite o altura</label>
        <input type="text" id="altura" name="altura" class="form-control"
        placeholder="Digite sua altura" required>
        <br/>
        <input type="submit" value="Calcular" class="btn btn-primary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Aqui é executado o metodo post após 
                                                 // Clicar no botão
        $imc = 0; // variavel imc zerada
        $nome = $_POST["nome"]; 
        $peso = str_replace(",", ".", $_POST["peso"]);  
        $altura = str_replace(",", ".", $_POST["altura"]); // altura
        $imc = $peso / ($altura * $altura);
        echo("Olá  $nome  <br/>");
        echo("Seu IMC = " . round($imc,2)); // Arredondei com 2 casas
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
    }
    ?>
    </div>
</body>
</html>
