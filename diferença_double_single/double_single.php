<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTES EM PHP</title>
</head>
<body>
    <h1>DIFERENÇA ENTRE "" E ''</h1>
        <?php 
            $nome = "eduardo";
            $sobrenome = "camargo";
            echo "Ola, $nome $sobrenome"; // dessa forma ira aparecer na tela ola, eduardo camargo

            $nome = "eduardo";
            $sobrenome = "camargo";
            echo 'Ola, $nome $sobrenome'; // dessa forma ira aparecer na tela 'Ola, $nome $sobrenome' ou seja, ele nao vai interpretar as variaveis
         

            // criando com constante para constante não funciona esse tipo de "" ou '' pois ela tem que ser passada no final 

            //MANEIERA QUE NAO FUNCIONA!
            const ESTADO = "SP";
            echo "<br> moro no .ESTADO";

            // MANEIRA CORRETA DE CRIAR
            const ESTADOO = "SP";
            echo "<br> moro no <br> " .ESTADOO;

            // DESSA FORMA TAMBEM FUNCIONA
            const ESTADOOO = "SP";
            echo 'moro no ' .ESTADOOO;

            // SINTAXE HEREDOC
            $curso = "PHP";
            $ano = date('Y');
            echo <<< TESTE

                    ESTOU ESTUDANDO $curso no ano de $ano

            TESTE;

            // SINTAXE NOWDOC veja que so muda o '' no nome teste 
             $curso = "PHP";
            $ano = date('Y');
            echo <<< 'TESTE'

                    ESTOU ESTUDANDO $curso no ano de $ano

            TESTE;



        ?>
</body>
</html>