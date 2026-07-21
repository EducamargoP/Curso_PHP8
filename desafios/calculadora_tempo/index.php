<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADO DO TEMPO</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['seg'] ?? 0;

    ?>


    <main>
        <h1>CALCULADORA DE TEMPO</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">DIGA NUMERO:</label>
            <input type="number" name="num" id="num" value="<?= $valor ?>" step="1" required>
            <input type="submit" value="CALCULAR">

        </form>
    </main>
    <section>
        <?php 

            // calculando toda de semana 
            $total = $valor;
            $semana = (int)($total / 604_800);
            $total = $total % 604_800;

            // calculando dias
            $dia = (int)($total / 84_400);
            $total = $total % 84_400;

            // calculando horas
            $hora = (int)($total / 3_600);
            $total = $total % 3_600;

            // calculando minutos
            $minuto = (int)($total / 60);
            $total = $total % 60;
        
        
            // calculando segundos
            $segundo = $total;

        
        
        ?>
        <h2>CALCULANDO "MES, SEMANA, DIA, HORAS, MINUTOS, SEGUNDOS"</h2>
        <ul>
            <li>SEMANAS: <?= $semana ?></li>
            <li>DIAS: <?= $dia ?> </li>
            <li>HORAS: <?= $hora ?> </li>
            <li>MINUTOS: <?= $minuto ?> </li>
            <li>SEGUNDOS: <?= $segundo ?> </li>

        </ul>
    </section>

</body>
</html>