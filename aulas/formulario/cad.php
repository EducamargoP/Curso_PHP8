<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>RESULTADO DO PROCESSAMENTO</h1>
    </header>
    <main>
        <?php 

           // var_dump($_REQUEST); $_get $_post $_cookies ela e junção disso tudo

           $nome = $_GET["nome"] ?? "sem nome";
           $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
           echo "<p> É um prazer te conhecer, $nome $sobrenome esse e meu site"
        
        
        ?>
    </main>
</body>

</html>