<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANALISADOR DE NUMEROS REAIS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>ANALISADOR DE NÚMERO REAL</h1>
        <?php 

            $num = $_POST["n"] ?? 0;

            echo "<p>ANALISANDO O NÚMERO". Number_Format($num,3,",",".") ."INFORMADO PELO USUÁRIO </p>";

            $int = (int) $num; 
            $fra = $num - $int;


            echo "<ul><li> A PARTE INTEIRA DO NÚMERO É:".number_format($int, 0, "," , ".") ."</li></ul>";

             echo "<ul><li> A PARTE FRACIONÁRIA É:".number_format($fra, 3, "," , ".") ."</li></ul>";
        
        ?>
    </main>
</body>
</html>