<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //Array indexado - O array sempre começa com 0
    $alunos = array("João", "Antonio","Marcia","Walter", "Cristina", "Manuel");
    echo $alunos[0]; //Retorna João 
    echo "<br>";
    //O conut, contará quantos elementos tem no array
    echo count($alunos);// Saída: 6
    echo "<br>";
    //Incluindo um elemento no array
    $alunos[] = "Luana";
    echo $alunos[6];
    //array_pop($alunos);// Remove o último elemento - Remove Luana
    //unset($alunos[1]);// Remove o segundo elemento - Rmove Antonio
    echo "<br><h2> Listando os itens do array em ordem crescente. </h2>";
    //Exibindo todos os itens do array
    //A função sort, ordena o array em ordem crescente
    
    sort($alunos);
    
    foreach ($alunos as $lista){
        echo $lista . "<br>";
    }
    echo "<br><h2> Listando os itens do array em ordem decrecente. </h2>";

    //Exibindo todos os itens do array
    // A função rsort, ordena o array em ordem decrecente
    rsort($alunos);

    foreach ($alunos as $lista){
        echo $lista . "<br>";
    }

    echo "<br>";

    //Arrays associativos, pois possuem uma chave e um valor

    $celulares = array("João" => "(11) 95555-5555", "Ana" => "(12) 96666-6666", "Maria" => "(15) 97777-7777");
    echo $celulares ["Ana"]; //Saída (11) 96666-6666
    echo "<br>";
    //Arrays multidimensionais

    $carros = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land rover", 17, 15),
    );

    echo $carros[0][0]; //Saída: Volvo
    echo "<br>";
    echo $carros[3][0]; //Saída: Land Rover
    ?>

</body>
</html>