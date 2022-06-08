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

        function soma(){
            $p = func_get_args(); // Essa função get_args coloca os dados dentro de um vetor
            $t = func_num_args(); // Retorna o tamanho do vetor ex: vetor de 5 posições

            $s = 0;

            for($i = 0; $i < $t; $i++){
                $s += $p[$i];
            }

            return $s;
        }

        $r = soma(3, 5, 2, 8, 9, 4);
        echo "A soma dos valores e $r";

    ?>
</div>
</body>
</html>