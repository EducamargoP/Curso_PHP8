<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULANDO RAIZ QUADRADA E RAIZ CÚBICA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <?php 
    // AREA DE DECLARAÇÕES
    $numero = $_GET['num']?? 0;
    
    ?>
    
    <main>
        <h1>DIGA O NUMERO QUE DESEJA SABER QUADRA E CUBICA</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">NÚMERO</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="CALCULAR">


        </form>
        <section>
            <h2>RESULTADO FINAL</h2>
            <?php 
                $rq = $numero ** (1/2);
                $rc = $numero ** (1/3);

                echo "<p>ANALISANDO O NUMERO $numero.</p>";
                echo "<ul<li> A SUA RAIZ QUADRADA É: $rq <br>";
                echo "<ul<li> A SUA RAIZ CÚBICA É: $rc"

            
            
            ?>

        </section>




    </main>
</body>
</html>