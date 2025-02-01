<html>
    <head>
        <title>Meu décimo Projeto</title>
    </head>
    <body>
        <?php
           $nome_completo = "João da Silva Batista";
           // Funções string, ver em: https://www.php.net/manual/pt_BR/ref.strings.php
           // Função strpos retorna a primeira posição de alguma coisa que queremos
           // dentro de uma string
           $posicao_espaco = strpos($nome_completo, " ");
           // Função strpos retorna a última posição de alguma coisa que queremos
           // dentro de uma string    
           $ultima_posicao = strrpos($nome_completo, " ");
           // Função substring retorna uma parte de uma string da posição inicial até
           // Posição final, lembrando que sempre começamos a contagem com 0
           $primeiro_nome = substr($nome_completo, 0, $posicao_espaco);
           $sobrenome = substr($nome_completo, $ultima_posicao, strlen($nome_completo));
           echo("<h1>Nome Completo: " . $nome_completo . "</h1>");
           echo("<h1>Primeiro Nome: " . $primeiro_nome . "</h1>");
           echo("<h1>Sobrenome: " . $sobrenome . "</h1>");
        ?>
    </body>
</html>