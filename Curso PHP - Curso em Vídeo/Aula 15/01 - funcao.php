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

        function teste(&$x){
            $x += 2;
            echo "O valor de X e $x";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A e $a</p>";

    ?>
</div>
</body>
</html>