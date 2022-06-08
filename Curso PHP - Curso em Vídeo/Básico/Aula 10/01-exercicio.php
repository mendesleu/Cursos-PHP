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

        $n = isset($_GET['num'])?$_GET['num']:0;
        $o = isset($_GET['oper'])?$_GET['oper']:1;

        switch($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
                break;
        }

        echo "O resultado da operação solicitada foi <span class'foco'>$r</span>";

    ?>
    <br>
    <a href="01-exercicio.html" class="botao">Voltar</a>
</div>
</body>
</html>