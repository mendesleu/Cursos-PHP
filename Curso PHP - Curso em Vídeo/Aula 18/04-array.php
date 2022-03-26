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

        $v = array( 3 => 5, 
                    1 => 9, 
                    0 => 8,
                    7 => 7);
        unset($v[0]); // Exclui a possição do vetor
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>