<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALGUNS EXEMPLOS DE TAGS ANTIGAS</title>
</head>
<body>
    <h1>Exemplo de tags PHP</h1>
    
    // super tag
   <?php
        $nome = "eduardo camargo";
        echo "<p>olá, $nome</p>";
    
    ?>

    // short open tag
    <? 
        $nome = "eduardo camargo";
        echo "<p>olá, $nome</p>";
    
    ?>

    //ASP tag
    /* essa versao funcionaria apenas abaixo da versao php5
    <%
        $nome = "eduardo camargo";
        echo "<p>ola, $nome</p>";
    
    %> */

    // short tag, utilizado apenas para 1 linha 
    <?=  "ola, $nome" ?>
</body>
</html>