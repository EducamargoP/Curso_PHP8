<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUMERO ANTECESSOR E SUCESSOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 


        // numero antecessor
        $anterior = $_GET["numero"];
        $valor = $anterior - 1;
        echo "NUMERO ANTECESSOR É: $valor \n";

        // numero sucessor
        $sucessor = $_GET["numero"];
        $valor = $anterior + 1;
        echo "<br> NUMERO SUCESSOR É: $valor";

       
    
    
    
    ?>
</body>
</html>