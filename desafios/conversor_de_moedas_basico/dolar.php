<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERSOR DE MOEDAS R$ PARA U$</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <form method="get" action="dolar.php">
        <label for="number" name="numero"><h1>DIGA QUANTO TEM R$: </h1></label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="CONVERTER">

    </form>
    <?php 
        $dolar = 5.08;
        $valor = $_GET["numero"];
        $conversor = $valor / $dolar;
        $USA = number_format($conversor, 2);

        echo "<h1/>VOCÊ TEM $valor reais convertendo para dolar U$: $USA";
    
    
    
    
    ?>
    
</body>
</html>