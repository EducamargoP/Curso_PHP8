<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTES DE TIPOS PRIMITIVOS EM PHP</title>
</head>
<body>
    <h1>TESTES DE TIPOS PRIMITIVOS EM PHP</h1>
        <?php 

            $num = 300;
            echo "o valor da variavel e: $num";
            
            // para entender que int tambem pode ir letras, calculos de base numericas aqui tem que dar 26
            $num = 0x1A;
            echo"<br> o valor da variavel e $num";

            // 3e2 e a mesma coisa que 3x10(2) porem dessa forma ele entra como numero float, caso queira int tem que colocar na frente (int)
            // $num = (int)3e2;
            $num = 3e2;
            echo "<br> o valor da variavel e $num";
    

            // ARRAY
            $vet = [6,2,3,5, "maria", false];
            var_dump($vet);
        
        
            //OBJECT
            class Pessoa {
                private string $nome;
            }

            $p = new Pessoa;
            var_dump($p);
        ?>
</body>
</html>