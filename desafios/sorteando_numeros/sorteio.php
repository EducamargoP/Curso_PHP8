<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SORTEANDO NUMERO ESCOLHIDOS</title>
    
</head>
<body>
    <header>
        <h1>SORTEIO DE NUMERO DE 0 A 100</h1>
    </header>
    <section>
        <form action="sorteio.php" method="get">
            
            <input type="submit" id="num" value="Enviar">
        </form>
    </section>
    <?php 
        
        $sorteio = random_int(0,100);
        echo "<br>O ESCOLHIDO FOI: $sorteio";
    
    
    
    
    ?>
</body>
</html>