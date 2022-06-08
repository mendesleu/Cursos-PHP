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

        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        $tipo  = $_GET['op'];

        echo "Os valores passados foram $n1 e $n2 <br>";

        $r = ($tipo == 's') ? $n1+$n2 : $n1*$n2; // Operador unario.

        echo "O resultado será $r";

    ?>
</div>
</body>
</html>