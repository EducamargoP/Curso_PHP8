<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBAIS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        // ESSE PRE DA UMA ARRUMA NO ARRAY DEIXAR MAIS LEGIVEL O SCRIPT , SEM ELE BAGUNÇA TUDO!
        <pre>
            <?php 
                // um cookie com hora 3600 = 1hr , quinta como chave TEM QUE SER A PRIMEIRA DECLARAÇÃO DO SCRIPT
                setcookie("dia-da-semana", "quinta-feira", time() + 3600);

                // TEM QUE CHAMAR ELA SSESION
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                // get
                echo "<h1> SuperGlobais GET</h1>";

                var_dump($_GET);

                // post
                echo "<h1> SuperGlobais POST</h1>";

                var_dump($_POST); 
            
                // request
                echo "<h1> SuperGlobais REQUEST</h1>";

                var_dump($_REQUEST);

                // cookie
                 echo "<h1> SuperGlobais COOKIE</h1>";

                var_dump($_COOKIE);

                // SESSION
                echo "<h1> SuperGlobais SESSION</h1>";

                var_dump($_SESSION);

                // env PARA ENVIAR FORMULARIO 
                echo "<h1> SuperGlobais ENV</h1>";

                var_dump($_ENV);

                // server PARA VER SOFTWARE , ENDEREÇO DE IP ALGUMA VARIAVEIS IMPORTANTES
                echo "<h1> SuperGlobais SERVER</h1>";

                var_dump($_SERVER);

                // GLOBALS ELE TEM TODAS AS OUTRAS DENTRO DELE 
                echo "<h1> SuperGlobais GLOBALS</h1>";

                var_dump($GLOBALS);

            
            
            ?>
        </pre>
    </main>
</body>
</html>