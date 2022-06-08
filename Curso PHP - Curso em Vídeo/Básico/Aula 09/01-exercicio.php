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

        $a = isset($_GET['ano'])?$_GET['ano']:1900;
        $i = date("Y") - $a;
        echo "Nasceu em $a e terá $i anos <br>";
        if($i >= 18){
            $v = "Já pode votar";
            $d = "Já pode Dirigir";
        }else{
            $v = "Não pode votar";
            $d = "Não pode dirigir";
        }

        echo "Com essa idade você $v e tambem $d";

    ?>
</div>
</body>
</html>