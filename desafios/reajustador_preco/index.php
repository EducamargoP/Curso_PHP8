<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REAJUSTE DE PREÇO COM %</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['num'] ?? 0;
        $por = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>TRABALHANDO COM % </h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">VALOR: </label>
            <input type="number" name="num" id="num" value="<?= $valor ?>">
            <label for="valor">DIGA A % DESEJADA: </label>
            <input type="number" name="valor" id="valor" value="<?= $por ?>">
            <input type="submit" value="CALCULAR">


        </form>
    </main>
    <section>
        <?php 
            $total = ($valor * $por) / 100
        
        
        ?>
        <h2>O RESUTADO DO VALOR <?= $valor ?> COM <?= $por ?>% tem um valor de <?=  $total ?>
    </section>
</body>
</html>