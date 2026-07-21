<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANATOMIA DA DIVISÃO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 


        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
    
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">   
            <label for="d1">DIVIDENDO</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo ?>">
            <label for="d2">DIVISOR</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">


        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <?php 
        // CALCULOS
            $quociente = ($dividendo / $divisor);
            $resto = $dividendo % $divisor;
            echo "<ul>";
            echo "<li>DIVIDENDO: $dividendo</li>";
            echo "<li>DIVISOR: $divisor</li>";
            echo "<li>QUOCIENTE: $quociente</li>";
            echo "<li>RESTO: $resto</li>";
            echo "</ul>";

        
        
        ?>
    </section>
</body>
</html>