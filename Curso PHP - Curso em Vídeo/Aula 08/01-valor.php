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

        $valor = $_GET['v'];
        $rq = sqrt($valor);
        echo "A raiz de $valor e igual a " . number_format($rq, 2);

    ?>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>