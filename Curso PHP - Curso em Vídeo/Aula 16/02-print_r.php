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

        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;

        print_r($v);

        $v2 = array(3,7,6,2,1,9);
        echo "<br>";
        print_r($v2);

        echo "<br>";
        var_dump($v);
        echo "<br>";    
        var_export($v);

    ?>
</div>
</body>
</html>