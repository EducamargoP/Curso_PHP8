<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular media</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
       $valor1 = $_GET['v1'] ?? 0;
       $peso1 = $_GET['p1']?? 0;
       $valor2 = $_GET['v2'] ?? 0;
       $peso2 = $_GET['p2']?? 0;
    
    
    ?>
    <main>

    
        <h1>CALCULAR MEDIA ARITMÉTICA E PONDERADA</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="v1" name="v1">VALOR 1: </label>
            <input type="number" name="v1" id="v1" required value="<?= $valor1 ?>">
            <label for="P1">1 PESO: </label>
            <input type="number" name="p1" id="p1" min="1" required value="<?= $peso1 ?>">
            <label for="v2">VALOR 2: </label>
            <input type="number" name="v2" id="v2" required value="<?= $valor2 ?>">
            <label for="p2">2 PESO: </label>
            <input type="number" name="p2" id="p2" min="1" riquered <?= $peso2 ?>>
            <input type="submit" value="CALCULAR MEDIAS">
                   
        </form>

        <section>
            <?php 
            
                $ma = ($valor1 + $valor2) / 2;
                $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            
            
            ?>
            <h2>RESULTADO DAS MEDIAS</h2>
            <p>Analisando os valores {<?= $valor1 ?>} e {<?= $valor2 ?>} </p>
            <ul>
                <li>A MÉDIA ARITMÉTICA SIMPLES ENTRE OS VALORES É IGUAL A {<?= $ma ?>}</li>
                <li>A MÉDIA ARITMÉTICA PONDERADA COM PESOS {<?= $peso1 ?>} E {<?= $peso2 ?>} É IGUAL A {<?= $mp ?>}</li>
            </ul>
            <?php 

            
            
            ?>

        
        </section>



    </main>
</body>
</html>