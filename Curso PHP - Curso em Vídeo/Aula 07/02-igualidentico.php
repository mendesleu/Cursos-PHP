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

        $a = 3;
        $b = '3';
        // $r = ($a == $b)?'sim':'não'; // Testa a variável se ela ter valor igual
        $r = ($a === $b)?'sim':'não'; // Testa a variável se ela e do tipo igual a outra
        echo "As variaveis A e B são identicas? $r";

    ?>
</div>
</body>
</html>