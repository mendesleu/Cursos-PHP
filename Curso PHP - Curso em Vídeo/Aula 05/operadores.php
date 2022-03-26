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
        $n2 = $_GET['b']; // Get capta informações da URL.
        $m = ($n1 + $n2) / 2;
        echo "A soma vale " . ($n1+$n2);
        echo "<br>A subtração vale " . ($n1-$n2);
        echo "<br>A multiplicação vale " . ($n1*$n2);
        echo "<br>A divisão vale " . ($n1/$n2);
        echo "<br>A modulo vale " . ($n1%$n2);
        echo "<br>A media vale " . ($m);
    ?>
</div>
</body>
</html>