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

        $txt = isset($_GET['t'])?$_GET['t']:"Texto Generico"; 
        $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000000";

    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <?php

        echo "<span class='texto'>$txt</span>"

    ?>
    <a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>