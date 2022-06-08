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

    <form method="get" action="02 - tabuada2.php">
        <select name="num">
            <?php for($c = 1; $c <= 10; $c++){
                echo "<option value='$c'>$c</option>";
            } ?>
        </select>
        <input type="submit" value="enviar" class="botao">
    </form>

</div>
</body>
</html>