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

        $nome = isset($_GET['nome'])?$_GET['nome']:"Não Informado";
        $ano = isset($_GET['ano'])?$_GET['ano']:0;
        $sexo = isset($_GET['sexo'])?$_GET['sexo']:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";

    ?>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>