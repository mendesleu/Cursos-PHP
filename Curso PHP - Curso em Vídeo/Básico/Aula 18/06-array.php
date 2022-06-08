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
    <pre>
    <?php

        $m = array(
            array(6,4),
            array(4,9),
            array(3,2)
        );
        print_r($m);
        $m[0][1] = $m[2][0];
        print_r($m);

    ?>
    </pre>
</div>
</body>
</html>