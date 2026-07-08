<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLOS PHP</title>
</head>
<body>
    <h1>Exemplos de PHP</h1>
    <?php 
        // monstrando dia, mes, ano
        echo "hoje é dia " . date("d/M/Y");

        // codigo para aparecer a hora de são paulo
        date_default_timezone_set("america/Sao_Paulo");

        // monstrando horas, minuto, segundo (porem aqui aparece a hora o servidor, tem que ter o codigo para a hora do brasil)
        echo "<br/> <br/> e a hora atual é " .date("G:i:s")
    
    
    ?>
</body>
</html>