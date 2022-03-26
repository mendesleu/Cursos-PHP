<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" media="all" href="../_css/estilo.css">

    <style>
        body{ 
            background: url("../_css/wallpaper-php.jpg") no-repeat top center fixed;
        }
    </style>
    
</head>
<body>
<div>
    <?php

        $v = isset($_GET['val'])?$_GET['val']:1;

        echo "<h1> Calculando o fatorial de $v </h1>";

        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        }while($c >= 1);
        echo "<h2>$v ! = $fat";

    ?><br>
    <a href="02 - fatorial.html" class="botao">Voltar</a>
</div>
</body>
</html>