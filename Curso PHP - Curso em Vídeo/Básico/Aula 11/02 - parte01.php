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
    
    <form method="get" action="02 - parte02.php">
        <?php
            $c = 1;
            while ($c <= 5){
                
        ?>
        valor <?php echo $c ?> : <input type="number" name="v<?php echo $c ?>" max="100" min="0" value="0"><br>
        <?php
                $c++;
            }
        ?>
        <input type="submit" value="Enviar" class="botao">
    </form>

</div>
</body>
</html>