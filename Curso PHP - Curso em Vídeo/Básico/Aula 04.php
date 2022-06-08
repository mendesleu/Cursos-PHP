<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" media="all" type="text/css" href="_css/estilo.css">

</head>
<body>

    <div>

        <?php

            $nome = "Leo";
            $idade = 24;

            echo $nome. " tem " .$idade. " anos <br>"; #Com concatenação
            echo "$nome tem $idade anos"; #Sem concatenação
            

        ?>
        
    </div>

</body>
</html>