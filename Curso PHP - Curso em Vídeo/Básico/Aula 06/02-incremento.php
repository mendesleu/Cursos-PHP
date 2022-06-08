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

        $atual = $_GET['aa'];
        echo "O ano atual é $atual e o ano anterior é " . --$atual;
        // Incremento antes da variavél será usado antes da variavél, ou seja diminuirá o valor ou aumentará.

    ?>
</div>
</body>
</html>