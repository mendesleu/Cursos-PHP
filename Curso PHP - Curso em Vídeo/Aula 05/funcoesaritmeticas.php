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

        h2{
            font-size: 12pt Arial;
            color: #171559;
        }
    </style>
    
</head>
<body>
<div>
    <?php
        $v1 = $_GET['x'];
        $v2 = $_GET['y'];
        echo "<h2>Valores recebidos: $v1 e $v2<h2>";
        echo "O valor absoluto de $v2 e " . abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
        echo "<br/>A raiz de $v1 e " . sqrt($v1);
        echo "<br/>O valor de $v2 arredondado " . round($v2); // Ceil sempre arredonda pra cima e floor sempre arredonda pra baixo
        echo "<br/>A parte inteira de $v2 e " . intval(($v2));
        echo "<br/>O valor de $v1 em moeda e " . number_format($v1,2,",","."); // O dois define a quantidade de casas depois da virgula, a virgula muda de ponto pra virgula e o ponto aparece em milhar
    ?>
</div>
</body>
</html>