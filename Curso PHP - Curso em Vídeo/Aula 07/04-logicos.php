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

        // Operadores logicos
        $ano = $_GET['an'];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos";
        $tipo = ($idade >= 18 && $idade < 65)?"OBRIGATORIO":"Não Obrigatorio";
        echo " e dessa forma seu voto e $tipo";

    ?>
</div>
</body>
</html>