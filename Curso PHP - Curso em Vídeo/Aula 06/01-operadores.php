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

        $preco = $_GET['p'];
        echo "O preço do produto e R$ $preco";
        $preco += ($preco * 10 / 100);
        echo "<br>E o novo preço com 10% de aumento sera R$ " .  number_format($preco, 2, ",");
        // $preco -= ($preco * 10 / 100);
        // echo "<br>E o novo preço com 10% de desconto sera R$ " . number_format($preco, 2, ","); 

    ?>
</div>
</body>
</html>