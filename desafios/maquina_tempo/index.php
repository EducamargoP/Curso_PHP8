<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULAR SUA IDADE COM ANO SOLICITADO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $ano = $_GET['ano']?? 2000;
        $futuro = $_GET['fut']?? $atual;
        
    
    
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano">ANO DE NASCIMENTO: </label>
            <input type="number" name="ano" id="ano" max="<?= $atual - 1 ?>"value="<?= $atual ?>">
            <label for="fut">QUAL ANO DESEJA SABER:</label>
            <input type="number" name="fut" id="fut" value="<?= $futuro ?>">
            <input type="submit" value="ANALISAR">


        </form>

    </main>

    <section>
        <?php 
            $idadef =  $atual - $ano ;
        
        
        ?>
        <h2>RESULTADO:</h2>
        <p> QUEM NASCEU EM <?= $ano ?> VAI TER <?= $idadef ?> ANOS EM <?= $futuro ?> . </p>

    </section>
    
</body>
</html>