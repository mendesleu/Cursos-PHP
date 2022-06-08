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

        $c = 1;

        do{
            $tab = $v * $c;
            echo $v . " * " . $c . " = " . $tab . "<br>";
            $c++;
        }while($c<=10);

    ?><br>
    <a href="03 - tabuada.html" class="botao">Voltar</a>
</div>
</body>
</html>