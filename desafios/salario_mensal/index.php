<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUANTO RECEBE E QUANTOS SALARIOS MIN </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_621.00;
        $salario = $_GET['sal'] ?? 1_621.00;

    
    
    ?>
    <main>
        <h1>INFORME SEU SALARIO: </h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="sal">SALÁRIO: </label>
            <input type="number" min="1" name="sal" id="sal" value="<?= $salario ?>" step="0.01">
            <p>CONSIDERANDO O SALÁRIO MINIMO DE R$: <?= number_format($minimo, 2, ",", ".") ?><br></p>
            <input type="submit" value="CALCULAR">



        </form>

    </main>

    <section>
        <h2>RESULTADO FINAL :</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
            echo "<p>GANHA $tot SALÁRIOS MINIMOS. +". $dif ." REAIS</p>";
        ?>
    </section>
</body>
</html>