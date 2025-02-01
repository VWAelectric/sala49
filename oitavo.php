<!DOCTYPE html>
<html>
<head>
    <title>Meu Oitavo Projeto</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite o número para a tabuada:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Gerar Tabuada">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        echo "<h2>Tabuada do $numero:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo($numero . " X " . $i . " = " . $numero * $i . "<br/>");
        }
    }
    ?>
</body>
</html>