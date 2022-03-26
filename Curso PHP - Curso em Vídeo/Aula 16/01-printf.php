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

        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$ ".number_format($pr,2,",");
        printf("<br>O %s custa R$ %.2f", $p, $pr);

    ?>
</div>
</body>
</html>